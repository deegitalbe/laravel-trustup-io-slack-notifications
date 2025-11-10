<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Providers;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Package;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoSlackNotificationsServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
        //
    }
}
