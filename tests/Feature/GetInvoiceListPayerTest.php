<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoiceListPayer;

it('b2b service getInvoiceListPayer test', function () {
    $config = config('postfinance-b2b');

    $payerId = config('postfinance-b2b.tests.payer_id');

    $client = PostfinanceClientFactory::factory($config);
    $response = $client->getInvoiceListPayer(new GetInvoiceListPayer($payerId, false));

    expect($response->getGetInvoiceListPayerResult()->getInvoiceReport())->toBeIterable();
})->group('get', 'test');
