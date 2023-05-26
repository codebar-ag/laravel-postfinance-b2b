<?php

namespace CodebarAg\PostfinanceB2B\CLient\Type;

class ArrayOfInvoiceReport
{
    /**
     * @var InvoiceReport
     */
    private $InvoiceReport;

    /**
     * @return InvoiceReport
     */
    public function getInvoiceReport()
    {
        return $this->InvoiceReport;
    }

    /**
     * @param  InvoiceReport  $InvoiceReport
     */
    public function withInvoiceReport($InvoiceReport)
    {
        $new = clone $this;
        $new->InvoiceReport = $InvoiceReport;

        return $new;
    }
}
