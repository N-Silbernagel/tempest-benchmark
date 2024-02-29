<?php

declare(strict_types=1);

use Tempest\AppConfig;
use Tempest\Application\Environment;
use Tempest\Discovery\DiscoveryLocation;
use Tempest\Tempest;
use function Tempest\env;

require_once __DIR__ . '/../vendor/autoload.php';

Tempest::boot(__DIR__ . '/../', fn() => new AppConfig(
    environment: Environment::from(env('ENVIRONMENT', Environment::LOCAL->value)),
    discoveryCache: env('DISCOVERY_CACHE', false),
    discoveryLocations: [
        new DiscoveryLocation('Tempest', '../vendor/tempest/framework/src')
    ],
    enableExceptionHandling: env('EXCEPTION_HANDLING', false)
))->http()->run();

exit;
