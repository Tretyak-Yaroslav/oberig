<?php

namespace App\Traits;

trait SeoTrait
{
    public function getSeoTitle()
    {
        if ($this->seo && $this->seo->t('seo_title')) {
            return strip_tags($this->seo->t('seo_title'));
        } elseif ($this->t('title')) {
            return strip_tags($this->t('title')) . ' ' . __t('Клініка Оберіг') ;
        }
    }

    public function getSeoDescription()
    {
        if ($this->seo && $this->seo->t('seo_description')) {
            return strip_tags($this->seo->t('seo_description'));
        } elseif ($this->t('short_description')) {
            return strip_tags($this->t('short_description')) . ' ' . __t('Клініка Оберіг');
        }
    }
}
