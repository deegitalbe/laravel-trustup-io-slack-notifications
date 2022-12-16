<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\IsSlackNotification;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotificationContract;

abstract class SlackNotification implements SlackNotificationContract
{
    use IsSlackNotification;
}