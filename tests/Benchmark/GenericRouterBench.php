<?php

declare(strict_types=1);

namespace Tests\Benchmark;

use PhpBench\Attributes\Revs;
use Tempest\AppConfig;
use Tempest\Container\GenericContainer;
use Tempest\Discovery\RouteDiscovery;
use Tempest\Http\GenericRequest;
use Tempest\Http\GenericRouter;
use Tempest\Http\Method;
use Tempest\Http\RouteConfig;

class GenericRouterBench
{
    private GenericRouter $genericRouter;
    private GenericRequest $firstStatic;
    private GenericRequest $lastStatic;
    private GenericRequest $firstDynamic;
    private GenericRequest $lastDynamic;

    public function __construct()
    {
        $genericContainer = new GenericContainer();
        $appConfig = new AppConfig();


        $routeConfig = new RouteConfig([]);
        $routeDiscovery = new RouteDiscovery($routeConfig);
        $routeDiscovery->restoreCache($genericContainer);

        $this->genericRouter = new GenericRouter(
            $genericContainer,
            $appConfig,
            $routeConfig
        );

        $this->firstStatic = new GenericRequest(Method::GET, '/a', []);
        $this->lastStatic = new GenericRequest(Method::GET, '/99', []);
        $this->firstDynamic = new GenericRequest(Method::GET, '/0/abc/a/def', []);
        $this->lastDynamic = new GenericRequest(Method::GET, '/logs/123', []);
    }

    #[Revs(10_000)]
    public function benchFirstStatic(): void
    {
        $this->genericRouter->dispatch($this->firstStatic);
    }

    #[Revs(10_000)]
    public function benchLastStatic(): void
    {
        $this->genericRouter->dispatch($this->lastStatic);
    }

    #[Revs(10_000)]
    public function benchFirstDynamic(): void
    {
        $this->genericRouter->dispatch($this->firstDynamic);
    }

    #[Revs(10_000)]
    public function benchLastDynamic(): void
    {
        $this->genericRouter->dispatch($this->lastDynamic);
    }
}
