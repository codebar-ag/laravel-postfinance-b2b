<?php

namespace CodebarAg\PostfinanceB2B\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetInvoicePayer implements RequestInterface
{
    /**
     * @var string
     */
    private $eBillAccountID;

    /**
     * @var string
     */
    private $BillerID;

    /**
     * @var string
     */
    private $TransactionID;

    /**
     * @var string
     */
    private $FileType;

    /**
     * Constructor
     *
     * @param  string  $eBillAccountID
     * @param  string  $BillerID
     * @param  string  $TransactionID
     * @param  string  $FileType
     */
    public function __construct($eBillAccountID, $BillerID, $TransactionID, $FileType)
    {
        $this->eBillAccountID = $eBillAccountID;
        $this->BillerID = $BillerID;
        $this->TransactionID = $TransactionID;
        $this->FileType = $FileType;
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
     * @return GetInvoicePayer
     */
    public function withEBillAccountID($eBillAccountID)
    {
        $new = clone $this;
        $new->eBillAccountID = $eBillAccountID;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillerID()
    {
        return $this->BillerID;
    }

    /**
     * @param  string  $BillerID
     * @return GetInvoicePayer
     */
    public function withBillerID($BillerID)
    {
        $new = clone $this;
        $new->BillerID = $BillerID;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param  string  $TransactionID
     * @return GetInvoicePayer
     */
    public function withTransactionID($TransactionID)
    {
        $new = clone $this;
        $new->TransactionID = $TransactionID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * @param  string  $FileType
     * @return GetInvoicePayer
     */
    public function withFileType($FileType)
    {
        $new = clone $this;
        $new->FileType = $FileType;

        return $new;
    }
}
