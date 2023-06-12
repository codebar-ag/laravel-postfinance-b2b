<?php

namespace CodebarAg\PostfinanceB2B\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetInvoiceListPayerResponse implements ResultInterface
{
    /**
     * @var ArrayOfInvoiceReport
     */
    private $GetInvoiceListPayerResult;

    /**
     * @return ArrayOfInvoiceReport
     */
    public function getGetInvoiceListPayerResult()
    {
        return $this->GetInvoiceListPayerResult;
    }

    /**
     * @param  ArrayOfInvoiceReport  $GetInvoiceListPayerResult
     * @return GetInvoiceListPayerResponse
     */
    public function withGetInvoiceListPayerResult($GetInvoiceListPayerResult)
    {
        $new = clone $this;
        $new->GetInvoiceListPayerResult = $GetInvoiceListPayerResult;

        return $new;
    }
}
