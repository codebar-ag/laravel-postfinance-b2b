<?php

namespace CodebarAg\PostfinanceB2B\Tests\Feature;

use CodebarAg\PostfinanceB2B\Client\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoicePayer;

it('b2b service getInvoicePayer test', function () {

    $config = config('postfinance-b2b');

    $payerId = config('postfinance-b2b.tests.payer_id');
    $billerId = '41101000000834484'; //config('postfinance-b2b.tests.biller_id');
    $transactionId = '9360415238'; //config('postfinance-b2b.tests.transaction_id');
    $fileType = config('postfinance-b2b.tests.file_type');

    $client = PostfinanceClientFactory::factory($config);
    $response = $client->getInvoicePayer(new GetInvoicePayer($payerId, $billerId, $transactionId, $fileType));

    ray($response->getGetInvoicePayerResult()->getData());
    expect($response->getGetInvoicePayerResult()->getData())->toBeString()->not()->toBeEmpty();
})->group('get', 'test')->only();
