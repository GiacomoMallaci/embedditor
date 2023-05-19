<?php

namespace App\Services\Storage\Events\Get;

use App\Services\Storage\Drivers\LocalStorageDriver;
use App\Services\Storage\Events\BaseGetStorageEvent;
use App\Services\Storage\Handlers\Get\GetRawLocalStorageHandler;


class GetRawStorageEvent extends BaseGetStorageEvent
{
    protected function setConsumers(string $path): void
    {
        $this->consumers = [
            new GetRawLocalStorageHandler(new LocalStorageDriver(), $path),
        ];
    }
}
