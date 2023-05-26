<?php

return [
    'exceptions' => env('POSTFINANCE_B2B_EXCEPTIONS', true),
    'trace' => env('POSTFINANCE_B2B_TRACE', true),
    'soap_version' => env('POSTFINANCE_B2B_TRACE', SOAP_1_1),
    'cache_wsdl' => env('POSTFINANCE_B2B_CACHE_WSDL', WSDL_CACHE_NONE),

];
