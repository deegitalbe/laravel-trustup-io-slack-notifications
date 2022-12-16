<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack;

interface SlackNotifiableContract
{
    /**
     * Defining route to use for slack notifications.
     * 
     * @return string
     */
    public function routeNotificationForSlack();
}