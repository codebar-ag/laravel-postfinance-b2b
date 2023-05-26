<?php

namespace CodebarAg\PostfinanceB2B\CLient\Type;

class InvoiceReport
{
    /**
     * @var string
     */
    private $BillerID;

    /**
     * @var string
     */
    private $TransactionID;

    /**
     * @var \DateTimeInterface
     */
    private $DeliveryDate;

    /**
     * @var string
     */
    private $FileType;

    /**
     * @return string
     */
    public function getBillerID()
    {
        return $this->BillerID;
    }

    /**
     * @param  string  $BillerID
     * @return InvoiceReport
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
     * @return InvoiceReport
     */
    public function withTransactionID($TransactionID)
    {
        $new = clone $this;
        $new->TransactionID = $TransactionID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param  \DateTimeInterface  $DeliveryDate
     * @return InvoiceReport
     */
    public function withDeliveryDate($DeliveryDate)
    {
        $new = clone $this;
        $new->DeliveryDate = $DeliveryDate;

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
     * @return InvoiceReport
     */
    public function withFileType($FileType)
    {
        $new = clone $this;
        $new->FileType = $FileType;

        return $new;
    }
}
