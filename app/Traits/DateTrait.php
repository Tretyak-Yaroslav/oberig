<?php

namespace App\Traits;

use Carbon\Carbon;
use Exception;

trait DateTrait
{
    public function humanDate(string $field): string
    {
        /** @var Carbon|null $date */
        $date = $this->{$field};

        if (!($date instanceof Carbon)) {
            throw new Exception("$field is not valid Carbon date");
        }

        return $date->isoFormat('D MMMM GGGG');
    }
}
