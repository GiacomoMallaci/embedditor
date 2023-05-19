<?php

namespace App\Services\Storage\Events\Copy;

use App\Services\Storage\Drivers\LocalStorageDriver;
use App\Services\Storage\Events\BaseCopyStorageEvent;
use App\Services\Storage\Handlers\Copy\CopyRawLocalStorageHandler;


class CopyRawStorageEvent extends BaseCopyStorageEvent
{
    protected function setConsumers(string $path, string $existedFile): void
    {
        $this->consumers = [
            new CopyRawLocalStorageHandler(new LocalStorageDriver(), $path, $existedFile),
        ];
    }
}
