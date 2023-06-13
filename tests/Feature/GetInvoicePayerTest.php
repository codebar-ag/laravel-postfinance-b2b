<?php

namespace CodebarAg\PostfinanceB2B\Tests\Feature;

use CodebarAg\PostfinanceB2B\Client\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoicePayer;

it('b2b service getInvoicePayer test', function () {

    $config = require dirname(__DIR__, 2).'/config/postfinance-b2b.php';
    $client = PostfinanceClientFactory::factory($config);
    $response = $client->getInvoicePayer(new GetInvoicePayer('41100000198521795', '41101000000798788', 'INV61595', 'PDF'));

    expect($response->getGetInvoicePayerResult()->getData())
        ->toBeString()
        ->not()->toBeEmpty();
})
    ->group('get', 'test');
