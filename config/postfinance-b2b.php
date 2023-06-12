<?php

return [
    'wsdl' => env('POSTFINANCE_B2B_WSDL', 'https://ebill-ki.postfinance.ch/B2BService/B2BService.svc?singleWsdl'),
    'cache_wsdl' => env('POSTFINANCE_B2B_CACHE_WSDL', WSDL_CACHE_NONE),
    'username' => env('POSTFINANCE_B2B_USERNAME', ''),
    'password' => env('POSTFINANCE_B2B_PASSWORD', ''),
    'debug' => env('POSTFINANCE_B2B_DEBUG', false),
];
