<?php

namespace CodebarAg\PostfinanceB2B\Client;

use CodebarAg\PostfinanceB2B\Client\Type\DownloadFile;
use CodebarAg\PostfinanceB2B\Client\Type\ExecutePing;
use CodebarAg\PostfinanceB2B\Client\Type\ExecutePingResponse;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoiceListPayer;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoiceListPayerResponse;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoicePayer;
use CodebarAg\PostfinanceB2B\Client\Type\GetInvoicePayerResponse;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class PostfinanceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|DownloadFile  $parameters
     * @return ResultInterface|GetInvoicePayerResponse
     *
     * @throws SoapException
     */
    public function downloadFile(DownloadFile $parameters): GetInvoicePayerResponse
    {
        return ($this->caller)('DownloadFile', $parameters);
    }

    /**
     * @param  RequestInterface|GetInvoicePayer  $parameters
     * @return ResultInterface|GetInvoicePayerResponse
     *
     * @throws SoapException
     */
    public function getInvoicePayer(GetInvoicePayer $parameters): GetInvoicePayerResponse
    {
        return ($this->caller)('GetInvoicePayer', $parameters);
    }

    /**
     * @param  RequestInterface|GetInvoiceListPayer  $parameters
     * @return ResultInterface|GetInvoiceListPayerResponse
     *
     * @throws SoapException
     */
    public function getInvoiceListPayer(GetInvoiceListPayer $parameters): GetInvoiceListPayerResponse
    {
        return ($this->caller)('GetInvoiceListPayer', $parameters);
    }

    /**
     * @param  RequestInterface|ExecutePing  $parameters
     * @return ResultInterface|ExecutePingResponse
     *
     * @throws SoapException
     */
    public function executePing(ExecutePing $parameters): ExecutePingResponse
    {
        return ($this->caller)('ExecutePing', $parameters);
    }
}
