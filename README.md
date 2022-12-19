# laravel-trustup-io-slack-notifications

This package enhances laravel slack notifications, allowing to send direct messages.

## Installation

### Require package
```shell
composer require deegitalbe/laravel-trustup-io-slack-notifications
```

### Env variables
```shell
SLACK_API_TOKEN=
```

## Usage

### Configure your models
```php
use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotifiableContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements SlackNotifiableContract
{
    use SlackNotifiable;
}
```

### Configure your notification

#### Extending slack notification
```php
use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;
use Deegitalbe\LaravelTrustupIoSlackNotifications\SlackNotification;
use Illuminate\Notifications\Messages\SlackMessage;

class OrderReceived extends SlackNotification
{
    public function slackChannel($notifiable): string|SlackChannel
    {
        return SlackChannel::PRODUCTS;
    }

    public function slackMessage(SlackMessage $message, $notifiable): SlackMessage
    {
        return $message->content("A new order has been made.");
    }
}
```

#### Implementing contract and using trait
```php
use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\IsSlackNotification;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts\Slack\SlackNotificationContract;
use Deegitalbe\LaravelTrustupIoSlackNotifications\Enum\SlackChannel;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class OrderReceived extends Notification implements SlackNotificationContract
{
    use IsSlackNotification;

    public function slackChannel($notifiable): string|SlackChannel
    {
        return $notifiable->getSlackId();
    }

    public function slackMessage(SlackMessage $message, $notifiable): SlackMessage
    {
        return $message->content("A new order has been made.");
    }
}

```