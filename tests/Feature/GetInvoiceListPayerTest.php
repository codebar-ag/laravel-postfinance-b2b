<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\CLient\Type\ExecutePing;

it('b2b service test', function () {

    $client = PostfinanceClientFactory::factory($wsdl = 'https://ebill-ki.postfinance.ch/B2BService/B2BService.svc?wsdl');
    $response = $client->executePing(new ExecutePing(null, '41100000198521795', true, true));

})
    ->group('get', 'test');
