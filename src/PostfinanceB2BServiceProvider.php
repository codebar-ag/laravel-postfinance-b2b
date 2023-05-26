<?php

namespace CodebarAg\PostfinanceB2B;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PostfinanceB2BServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-postfinance-b2b')
            ->hasConfigFile();
    }
}
