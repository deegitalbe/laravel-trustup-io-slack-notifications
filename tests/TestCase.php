<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Tests;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Package;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Providers\LaravelTrustupIoSlackNotificationsServiceProvider;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Illuminate\Notifications\SlackChannelServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    public function getServiceProviders(): array
    {
        return [
            SlackChannelServiceProvider::class,
            LaravelTrustupIoSlackNotificationsServiceProvider::class,
        ];
    }
}
