<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\PackageContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class Package extends VersionablePackage implements PackageContract
{
    public static function prefix(): string
    {
        return "laravel-trustup-io-slack-notifications";
    }
}