<?php

namespace CodebarAg\PostfinanceB2B\Client;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class PostfinanceClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('ArrayOfInvoiceReport', Type\ArrayOfInvoiceReport::class),
            new ClassMap('InvoiceReport', Type\InvoiceReport::class),
            new ClassMap('DownloadFile', Type\DownloadFile::class),
            new ClassMap('GetInvoicePayer', Type\GetInvoicePayer::class),
            new ClassMap('GetInvoicePayerResponse', Type\GetInvoicePayerResponse::class),
            new ClassMap('GetInvoiceListPayer', Type\GetInvoiceListPayer::class),
            new ClassMap('GetInvoiceListPayerResponse', Type\GetInvoiceListPayerResponse::class),
            new ClassMap('ExecutePing', Type\ExecutePing::class),
            new ClassMap('ExecutePingResponse', Type\ExecutePingResponse::class),
        );
    }
}
