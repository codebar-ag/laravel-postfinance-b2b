<?php

use CodebarAg\PostfinanceB2B\CLient\PostfinanceClientFactory;
use CodebarAg\PostfinanceB2B\CLient\Type\ExecutePing;

require_once dirname(__DIR__).'/vendor/autoload.php';

$config = require dirname(__DIR__).'/config/postfinance-b2b.php';
$client = PostfinanceClientFactory::factory($config);
$result = $client->executePing(
    new ExecutePing(null, '41100000198521795', null, null)
);

var_dump($result);
