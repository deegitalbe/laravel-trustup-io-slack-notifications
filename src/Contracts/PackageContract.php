<?php

namespace Deegitalbe\LaravelTrustupIoSlackNotifications\Contracts;

use Henrotaym\LaravelContainerAutoRegister\Services\AutoRegister\Contracts\AutoRegistrableContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\Contracts\VersionablePackageContract;

/**
 * Versioning package.
 */
interface PackageContract extends AutoRegistrableContract, VersionablePackageContract {}
