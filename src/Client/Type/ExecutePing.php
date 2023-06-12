<?php

namespace CodebarAg\PostfinanceB2B\Client\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExecutePing implements RequestInterface
{
    /**
     * @var string
     */
    private $BillerID;

    /**
     * @var string
     */
    private $eBillAccountID;

    /**
     * @var bool
     */
    private $ErrorTest;

    /**
     * @var bool
     */
    private $ExceptionTest;

    /**
     * Constructor
     *
     * @param  string  $BillerID
     * @param  string  $eBillAccountID
     * @param  bool  $ErrorTest
     * @param  bool  $ExceptionTest
     */
    public function __construct($BillerID, $eBillAccountID, $ErrorTest, $ExceptionTest)
    {
        $this->BillerID = $BillerID;
        $this->eBillAccountID = $eBillAccountID;
        $this->ErrorTest = $ErrorTest;
        $this->ExceptionTest = $ExceptionTest;
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
     * @return ExecutePing
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
    public function getEBillAccountID()
    {
        return $this->eBillAccountID;
    }

    /**
     * @param  string  $eBillAccountID
     * @return ExecutePing
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
    public function getErrorTest()
    {
        return $this->ErrorTest;
    }

    /**
     * @param  bool  $ErrorTest
     * @return ExecutePing
     */
    public function withErrorTest($ErrorTest)
    {
        $new = clone $this;
        $new->ErrorTest = $ErrorTest;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExceptionTest()
    {
        return $this->ExceptionTest;
    }

    /**
     * @param  bool  $ExceptionTest
     * @return ExecutePing
     */
    public function withExceptionTest($ExceptionTest)
    {
        $new = clone $this;
        $new->ExceptionTest = $ExceptionTest;

        return $new;
    }
}
