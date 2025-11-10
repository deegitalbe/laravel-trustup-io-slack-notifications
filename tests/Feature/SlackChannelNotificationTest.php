<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Tests\Feature;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;
use Deegitalbe\LaravelTrustupIoSlackNotifications\SlackNotifiableChannel;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Tests\TestCase;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Tests\Utils\Notifications\TestingNotification;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;

class SlackChannelNotificationTest extends TestCase
{
    public function test_slack_notification_in_production()
    {
        Notification::fake();
        
        $notification = new TestingNotification;
        $channel = SlackChannel::TECH_DEV;
        $notifiable = new SlackNotifiableChannel($channel);
        $channel->notify($notification);

        Notification::assertSentTo(
            $notifiable,
            TestingNotification::class
        );
    }

    public function test_it_triggers_slack_channel_in_production_environment()
    {
        App::shouldReceive('isProduction')
            ->once()
            ->withNoArgs()
            ->andReturnTrue();
        
        $notification = new TestingNotification;
        $channel = SlackChannel::TECH_DEV;
        $notifiable = new SlackNotifiableChannel($channel);

        $this->assertEquals($channel, $notification->slackChannel($notifiable));
    }

    public function test_it_triggers_slack_channel_in_non_production_environment()
    {
        App::shouldReceive('isProduction')
            ->once()
            ->withNoArgs()
            ->andReturnFalse();
        
        $notification = new TestingNotification;
        $channel = SlackChannel::TECH_DEV;
        $notifiable = new SlackNotifiableChannel($channel);

        $this->assertEquals(SlackChannel::TEST, $notification->slackChannel($notifiable));
    }
}