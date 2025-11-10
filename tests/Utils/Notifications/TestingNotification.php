<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Tests\Utils\Notifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\SlackChannelNotification;
use Illuminate\Notifications\Messages\SlackMessage;

class TestingNotification extends SlackChannelNotification
{
    public function slackMessage(SlackMessage $message, $notifiable): SlackMessage
    {
        return $message->attachment(function ($attachment) {
            $attachment->color('#36a64f')
                ->author('🚨 New Activation Request')
                ->title('Tenant #test')
                ->fields([
                    'Enterprise' => 'test',
                    'Account Type' => 'test',
                    'Admin First Name' => 'test',
                    'Admin Last Name' => 'test',
                    'VAT Number' => 'test',
                    'Created At' => 'test',
                ])
                ->footer('TrustUp')
                ->footerIcon('test')
                ->timestamp(now());
        });
    }
}
