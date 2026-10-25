<?php

use CodebarAg\PostfinanceB2B\Client\PostfinanceClient;
use CodebarAg\PostfinanceB2B\Client\PostfinanceClientFactory;
use Psl\Exception\InvariantViolationException;

function offlineFactoryConfig(array $overrides = []): array
{
    return array_merge([
        'wsdl' => __DIR__.'/../Fixtures/B2BService.wsdl',
        'cache_wsdl' => WSDL_CACHE_NONE,
        'username' => 'username',
        'password' => 'password',
        'debug' => false,
    ], $overrides);
}

it('builds a client from a local wsdl', function () {
    expect(PostfinanceClientFactory::factory(offlineFactoryConfig()))
        ->toBeInstanceOf(PostfinanceClient::class);
});

it('requires a username', function () {
    PostfinanceClientFactory::factory(offlineFactoryConfig(['username' => null]));
})->throws(InvariantViolationException::class, 'POSTFINANCE_B2B_USERNAME');

it('requires a password', function () {
    PostfinanceClientFactory::factory(offlineFactoryConfig(['password' => null]));
})->throws(InvariantViolationException::class, 'No password has been set. Please specify through .env POSTFINANCE_B2B_PASSWORD');

it('requires a wsdl location', function () {
    PostfinanceClientFactory::factory(offlineFactoryConfig(['wsdl' => '']));
})->throws(InvariantViolationException::class, 'No WSDL location available');

it('builds a client with debug logging enabled', function () {
    expect(PostfinanceClientFactory::factory(offlineFactoryConfig(['debug' => true])))
        ->toBeInstanceOf(PostfinanceClient::class);
});
