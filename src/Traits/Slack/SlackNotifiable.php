<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Traits\Slack;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Facades\Package;
use Illuminate\Notifications\Notifiable;

trait SlackNotifiable
{
    use Notifiable;

    /**
     * Defining route to use for slack notifications.
     *
     * @return string
     */
    public function routeNotificationForSlack()
    {
        return Package::getConfig('slack.url').'/chat.postMessage';
    }
}
