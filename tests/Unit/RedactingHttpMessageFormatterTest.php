<?php

use CodebarAg\PostfinanceB2B\Client\RedactingHttpMessageFormatter;
use Nyholm\Psr7\Request;
use Nyholm\Psr7\Response;

function wsseRequestBody(string $password): string
{
    return '<?xml version="1.0"?>'
        .'<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope">'
        .'<soap:Header><wsse:Security><wsse:UsernameToken>'
        .'<wsse:Username>username</wsse:Username>'
        .'<wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">'
        .$password
        .'</wsse:Password>'
        .'</wsse:UsernameToken></wsse:Security></soap:Header>'
        .'<soap:Body><ExecutePing/></soap:Body></soap:Envelope>';
}

it('masks the ws-security password in logged requests', function () {
    $request = new Request('POST', 'https://example.test/B2BService.svc', [], wsseRequestBody('S3cr3t-$Value'));

    $formatted = (new RedactingHttpMessageFormatter(99999))->formatRequest($request);

    expect($formatted)
        ->not->toContain('S3cr3t-$Value')
        ->toContain('PasswordText">[REDACTED]</wsse:Password>')
        ->toContain('<wsse:Username>username</wsse:Username>')
        ->toContain('<ExecutePing/>');
});

it('masks a password that was cut off by the body length limit', function () {
    $body = wsseRequestBody('S3cr3t-$Value');
    $limit = strpos($body, 'S3cr3t') + 4;

    $formatted = (new RedactingHttpMessageFormatter($limit))
        ->formatRequest(new Request('POST', 'https://example.test', [], $body));

    expect($formatted)->not->toContain('S3cr');
});

it('leaves messages without a password untouched', function () {
    $response = new Response(200, [], '<soap:Envelope><soap:Body>ok</soap:Body></soap:Envelope>');
    $request = new Request('POST', 'https://example.test');

    expect((new RedactingHttpMessageFormatter)->formatResponseForRequest($response, $request))
        ->toContain('<soap:Body>ok</soap:Body>');
});
