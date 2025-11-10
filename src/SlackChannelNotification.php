<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;

abstract class SlackChannelNotification extends SlackNotification
{
    /**
     * @param SlackNotifiableChannel $notifiable
     */
    public function slackChannel($notifiable): string|SlackChannel
    {
        return $notifiable->getChannel();
    }
}