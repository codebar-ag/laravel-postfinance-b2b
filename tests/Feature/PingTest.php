<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\CLient\Type\ExecutePing;

it('b2b service executePing test', function () {

    $config = require dirname(__DIR__, 2).'/config/postfinance-b2b.php';
    $client = PostfinanceClientFactory::factory($config);
    $response = $client->executePing(new ExecutePing(null, '41100000198521795', null, null));
    expect($response->getExecutePingResult())->toBeNumeric();

})
    ->group('get', 'test');
