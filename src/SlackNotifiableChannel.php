<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications;

use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotifiableContract;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Traits\Slack\SlackNotifiable;
use Illuminate\Support\Facades\App;

class SlackNotifiableChannel implements SlackNotifiableContract
{
    use SlackNotifiable;

    public function __construct(
        protected string|SlackChannel $channel
    ) {}

    public function getChannel(): string|SlackChannel
    {
        if (! App::isProduction()) {
            return SlackChannel::TEST;
        }

        return $this->channel;
    }

    public function getKey(): string
    {
        return is_string($this->channel)
            ? $this->channel
            : $this->channel->value;
    }
}
