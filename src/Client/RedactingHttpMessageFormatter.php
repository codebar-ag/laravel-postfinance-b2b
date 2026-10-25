<?php

namespace CodebarAg\PostfinanceB2B\Client;

use Http\Message\Formatter\FullHttpMessageFormatter;
use Psr\Http\Message\RequestInterface;

/**
 * Formats full HTTP messages for the debug log while masking the
 * WS-Security password that is sent in clear text in every request.
 *
 * @internal
 */
class RedactingHttpMessageFormatter extends FullHttpMessageFormatter
{
    public const REDACTED = '[REDACTED]';

    public function formatRequest(RequestInterface $request)
    {
        return self::redact(parent::formatRequest($request));
    }

    public static function redact(string $message): string
    {
        return preg_replace(
            '/(<(?:[\w.-]+:)?Password\b[^>]*>).*?(<\/(?:[\w.-]+:)?Password>|$)/s',
            '$1'.self::REDACTED.'$2',
            $message
        ) ?? $message;
    }
}
