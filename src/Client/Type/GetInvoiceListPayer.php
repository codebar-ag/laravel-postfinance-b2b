<?php

namespace CodebarAg\PostfinanceB2B\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetInvoiceListPayer implements RequestInterface
{
    /**
     * @var string
     */
    private $eBillAccountID;

    /**
     * @var bool
     */
    private $ArchiveData;

    /**
     * Constructor
     *
     * @param  string  $eBillAccountID
     * @param  bool  $ArchiveData
     */
    public function __construct($eBillAccountID, $ArchiveData)
    {
        $this->eBillAccountID = $eBillAccountID;
        $this->ArchiveData = $ArchiveData;
    }

    /**
     * @return string
     */
    public function getEBillAccountID()
    {
        return $this->eBillAccountID;
    }

    /**
     * @param  string  $eBillAccountID
     * @return GetInvoiceListPayer
     */
    public function withEBillAccountID($eBillAccountID)
    {
        $new = clone $this;
        $new->eBillAccountID = $eBillAccountID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getArchiveData()
    {
        return $this->ArchiveData;
    }

    /**
     * @param  bool  $ArchiveData
     * @return GetInvoiceListPayer
     */
    public function withArchiveData($ArchiveData)
    {
        $new = clone $this;
        $new->ArchiveData = $ArchiveData;

        return $new;
    }
}
