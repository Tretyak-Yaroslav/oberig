<?php

namespace App\Cms\Definitions;

use App\Models\Illness;
use Vis\Builder\Fields\{Froala, Id, Text, Textarea, Checkbox};
use Vis\Builder\Definitions\Resource;

class Illnesses extends Resource
{
    public $model = Illness::class;
    public $title = 'Болезни';
    protected $orderBy = 'id desc';

    public function fields()
    {
        return [
            'Основное' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Заголовок', 'title')->language()->filter()->sortable(),
                Froala::make('Описание', 'description')->language()->filter()->sortable(),
            ],
            'SEO' => [
                Text::make('Seo title', 'seo_title')
                    ->language()->morphOne('seo')->onlyForm(),
                Textarea::make('Seo description', 'seo_description')
                    ->language()->morphOne('seo')->onlyForm(),
                Text::make('Seo keywords', 'seo_keywords')->language()
                    ->morphOne('seo')->onlyForm(),
                Text::make('Seo canonical', 'seo_canonical')->language()
                    ->morphOne('seo')->onlyForm(),
                Checkbox::make('Seo noindex', 'is_seo_noindex')
                    ->morphOne('seo')->onlyForm(),
            ],
        ];
    }
}
