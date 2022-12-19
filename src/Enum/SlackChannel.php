<?php
namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Enum;

enum SlackChannel: string
{
    case GENERAL = "#general";
    case DEVELOPMENT = "#team-development";
    case PRODUCTS = "#product-updates";
    case TEST = "#bot-test-internal";
}