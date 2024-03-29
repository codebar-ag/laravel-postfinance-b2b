<?php

use CodebarAg\PostfinanceB2B\Client\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\Client\Type\ExecutePing;

it('b2b service executePing test', function () {

    $config = config('postfinance-b2b');

    $payerId = config('postfinance-b2b.tests.payer_id');

    $client = PostfinanceClientFactory::factory($config);
    $response = $client->executePing(new ExecutePing(null, $payerId, null, null));

    expect($response->getExecutePingResult())->toBeNumeric();
})->group('get', 'test');
