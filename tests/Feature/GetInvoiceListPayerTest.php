<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\CLient\Type\ExecutePing;

use Http\Client\Common\PluginClient;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18WsseMiddleware\WsseMiddleware;

it('b2b service test', function () {

    $transport = Psr18Transport::createForClient(
        new PluginClient($yourPsr18Client, [
            new WsseMiddleware([$entries])
        ])
    );

    $client = PostfinanceClientFactory::factory($wsdl = 'https://ebill-ki.postfinance.ch/B2BService/B2BService.svc?wsdl');
    $response = $client->executePing(new ExecutePing('yb8521795', 'yb8521795', true, true));
    ray($response->e());

})
    ->group('get', 'test');
