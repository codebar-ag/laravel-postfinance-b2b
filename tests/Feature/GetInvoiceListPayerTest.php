<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\CLient\Type\ExecutePing;

it('b2b service test', function () {
    $client = PostfinanceClientFactory::factory($wsdl = 'https://ebill-ki.postfinance.ch/B2BService/B2BService.svc?wsdl');
    $response = $client->executePing(new ExecutePing('yb8521795', 'yb8521795', true, true));
    ray($response->e());

})
    ->group('get', 'test');
