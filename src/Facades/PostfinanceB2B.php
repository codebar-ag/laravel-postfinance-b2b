<?php

namespace CodebarAg\PostfinanceB2B\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodebarAg\PostfinanceB2B\PostfinanceB2B
 */
class PostfinanceB2B extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CodebarAg\PostfinanceB2B\PostfinanceB2B::class;
    }
}
