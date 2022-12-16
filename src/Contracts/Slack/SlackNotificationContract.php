<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack;

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
     * @return string
     */
    public function slackChannel($notifiable): string;

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
     * @return SlackMessage
     */
    public function getSlackMessage($notifiable): SlackMessage;
}