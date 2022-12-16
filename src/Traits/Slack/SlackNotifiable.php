<?php

use Deegitalbe\LaravelTrustupIoSlackNotifications\Facades\Package;

trait SlackNotifiable
{
    /**
     * Defining route to use for slack notifications.
     * 
     * @return string
     */
    public function routeNotificationForSlack()
    {
        return Package::getConfig('slack.url') . '/chat.postMessage';
    }
}