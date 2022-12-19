<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Traits\Slack\IsSlackNotification;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotificationContract;
use Illuminate\Notifications\Notification;

abstract class SlackNotification extends Notification implements SlackNotificationContract
{
    use IsSlackNotification;
}