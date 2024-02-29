<?php

declare(strict_types=1);

namespace App;

use Tempest\Http\GenericResponse;
use Tempest\Http\Get;
use Tempest\Http\Response;
use Tempest\Http\Status;
use Tempest\Interface\View;

use function Tempest\view;

final readonly class HomeController
{
    #[Get('/a')]
    public function a(): Response
    {
        return new GenericResponse(Status::OK, "a");
    }

    #[Get('/b')]
    public function b(): Response
    {
        return new GenericResponse(Status::OK, "a");
    }
}
