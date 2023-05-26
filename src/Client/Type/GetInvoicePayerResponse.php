<?php

namespace CodebarAg\PostfinanceB2B\CLient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetInvoicePayerResponse implements ResultInterface
{
    /**
     * @var DownloadFile
     */
    private $GetInvoicePayerResult;

    /**
     * @return DownloadFile
     */
    public function getGetInvoicePayerResult()
    {
        return $this->GetInvoicePayerResult;
    }

    /**
     * @param  DownloadFile  $GetInvoicePayerResult
     * @return GetInvoicePayerResponse
     */
    public function withGetInvoicePayerResult($GetInvoicePayerResult)
    {
        $new = clone $this;
        $new->GetInvoicePayerResult = $GetInvoicePayerResult;

        return $new;
    }
}
