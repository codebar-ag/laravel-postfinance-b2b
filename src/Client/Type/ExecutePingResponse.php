<?php

namespace CodebarAg\PostfinanceB2B\Client\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExecutePingResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $ExecutePingResult;

    /**
     * @return string
     */
    public function getExecutePingResult()
    {
        return $this->ExecutePingResult;
    }

    /**
     * @param  string  $ExecutePingResult
     * @return ExecutePingResponse
     */
    public function withExecutePingResult($ExecutePingResult)
    {
        $new = clone $this;
        $new->ExecutePingResult = $ExecutePingResult;

        return $new;
    }
}
