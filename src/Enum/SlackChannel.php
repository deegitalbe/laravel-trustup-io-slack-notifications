<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Enum;

use Deegitalbe\LaravelTrustupIoSlackNotifications\SlackNotifiableChannel;
use Illuminate\Notifications\Notification;

enum SlackChannel: string
{
    case GENERAL = '#general';
    /** @deprecated */
    case DEVELOPMENT = '#team-development';
    case PRODUCTS = '#product-updates';
    case TEST = '#bot-test-internal';
    case MONITORING = '#monitoring';
    case TECH_DEV = '#tech--development';
    case INBOUND_ACTIVATION_REQUESTS = '#inbound-activation-requests';
    case TECH_FEATURES_MONITORING = '#tech--features-monitoring';

    public function notify(Notification $notification): void
    {
        (new SlackNotifiableChannel($this))->notify($notification);
    }
}
