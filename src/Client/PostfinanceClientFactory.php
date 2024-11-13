<?php

namespace CodebarAg\PostfinanceB2B\Client;

use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\LoggerPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Formatter\FullHttpMessageFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Middleware\RemoveEmptyNodesMiddleware;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WsaMiddleware2005;
use Soap\Psr18WsseMiddleware\WSSecurity\Entry;
use Soap\Psr18WsseMiddleware\WsseMiddleware;
use Symfony\Component\EventDispatcher\EventDispatcher;

use function Psl\invariant;

class PostfinanceClientFactory
{
    /**
     * @param  array{cache_wsdl: WSDL_CACHE_NONE|WSDL_CACHE_DISK|WSDL_CACHE_BOTH, wsdl: string, username: string, password: string, debug: bool}  $config
     */
    public static function factory(array $config): PostfinanceClient
    {
        invariant($config['wsdl'], 'No WSDL location available');
        invariant($config['username'], 'No username has been set. Please specify through .env POSTFINANCE_B2B_USERNAME');
        invariant($config['password'], 'No username has been set. Please specify through .env POSTFINANCE_B2B_PASSWORD');

        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($config['wsdl'], [
                'soap_version' => SOAP_1_2,
                'cache_wsdl' => $config['cache_wsdl'],
            ])
                ->withClassMap(PostfinanceClassmap::getCollection()),
            Psr18Transport::createForClient(
                new PluginClient(
                    Psr18ClientDiscovery::find(),
                    [
                        new HeaderDefaultsPlugin([
                            'User-Agent' => 'Laravel PostFinance B2B',
                        ]),
                        new RemoveEmptyNodesMiddleware,
                        new WsseMiddleware(
                            outgoing: [
                                (new Entry\Username($config['username']))
                                    ->withPassword($config['password'])
                                    ->withDigest(false),
                            ]
                        ),
                        new WsaMiddleware2005,
                        ...($config['debug'] ? [
                            new LoggerPlugin(
                                (new Logger('http'))->pushHandler(
                                    new StreamHandler(STDOUT)
                                ),
                                new FullHttpMessageFormatter(maxBodyLength: 99999)
                            ),
                        ] : []),
                    ]
                )
            )
        );

        ray($engine);

        $eventDispatcher = new EventDispatcher;
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new PostfinanceClient($caller);
    }
}
