<?php

namespace App\Traits;

trait MenuTrait
{
    public function getUrl()
    {
        if ($this->tree) {
            return $this->tree->getUrl();
        }

        if ($this->url) {
            return geturl($this->url);
        }

        if ($this->url_external) {
            return $this->url_external;
        }

        return null;
    }
}
