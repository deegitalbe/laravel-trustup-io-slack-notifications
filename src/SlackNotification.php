<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotificationContract;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Traits\Slack\IsSlackNotification;
use Illuminate\Notifications\Notification;

abstract class SlackNotification extends Notification implements SlackNotificationContract
{
    use IsSlackNotification;
}
