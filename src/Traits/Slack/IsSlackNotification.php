<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Facades\Package;
use Illuminate\Notifications\Messages\SlackMessage;

/** Representing slack notification */
trait IsSlackNotification
{
    /**
     * Defining notification channel
     * 
     * @return string[]
     */
    public function via()
    {
        return ['slack'];
    }

    /**
   * Get the Slack representation of the notification.
   *
   * @param  mixed  $notifiable
   * @return SlackMessage
   */
    public function toSlack($notifiable)
    {
        return $this->getSlackMessage($notifiable)
            ->to($this->getSlackChannel($notifiable))
            ->http(['headers' => ['Authorization' => Package::getConfig('slack.token')]]);
    }
}