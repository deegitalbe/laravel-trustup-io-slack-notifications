<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Tests;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Providers\LaravelTrustupIoSlackNotificationsServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoSlackNotificationsServiceProvider::class
        ];
    }
}