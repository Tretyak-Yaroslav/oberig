<?php

namespace App\Cms\Definitions;

use App\Models\PreparationSurvey;
use Vis\Builder\Fields\{Textarea, Froala, Id, Text, Checkbox, Foreign, Relations\Options};
use Vis\Builder\Definitions\Resource;

class PreparationSurveys extends Resource
{
    public $model = PreparationSurvey::class;
    public $title = 'Подготовка к обследованию';
    protected $orderBy = 'id desc';

    public function fields()
    {
        return [
            'Основное' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Заголовок', 'title')->language()->filter()->sortable(),
                Froala::make('Описание', 'description')->language()->filter()->sortable(),
                Foreign::make('Тип', 'type_id')
                    ->options(
                        (new Options('type'))->keyField('title')
                    )->sortable()->filter(),
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
