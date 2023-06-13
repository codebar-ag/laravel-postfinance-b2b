<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoiceListPayer;

it('b2b service getInvoiceListPayer test', function () {
    $config = require dirname(__DIR__, 2).'/config/postfinance-b2b.php';
    $client = PostfinanceClientFactory::factory($config);
    $response = $client->getInvoiceListPayer(new GetInvoiceListPayer('41100000198521795', false));
    expect($response->getGetInvoiceListPayerResult()->getInvoiceReport())->toBeIterable();

})
    ->group('get', 'test');
