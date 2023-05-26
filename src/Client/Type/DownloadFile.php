<?php

namespace CodebarAg\PostfinanceB2B\CLient\Type;

class DownloadFile
{
    /**
     * @var string
     */
    private $Data;

    /**
     * @var string
     */
    private $Filename;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param  string  $Data
     * @return DownloadFile
     */
    public function withData($Data)
    {
        $new = clone $this;
        $new->Data = $Data;

        return $new;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->Filename;
    }

    /**
     * @param  string  $Filename
     * @return DownloadFile
     */
    public function withFilename($Filename)
    {
        $new = clone $this;
        $new->Filename = $Filename;

        return $new;
    }
}
