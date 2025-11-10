<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;
use Illuminate\Notifications\Messages\SlackMessage;

/** Representing slack notification */
interface SlackNotificationContract
{
    /**
     * Defining notification channel
     *
     * @return string[]
     */
    public function via();

    /**
     * Representing channel where notification should be sent
     *
     * @param  mixed  $notifiable
     */
    public function slackChannel($notifiable): string|SlackChannel;

    /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable);

    /**
     * Building slack message.
     *
     * @param  mixed  $notifiable
     */
    public function slackMessage(SlackMessage $message, $notifiable): SlackMessage;
}
