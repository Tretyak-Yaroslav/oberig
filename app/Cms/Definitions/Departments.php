<?php

namespace App\Cms\Definitions;

use App\Models\Department;
use Vis\Builder\Fields\{Checkbox, Froala, Id, Image, Text, Textarea, Foreign, Relations\Options, ManyToMany};
use Vis\Builder\Definitions\Resource;

class Departments extends Resource
{
    public $model = Department::class;
    public $title = 'Отделения';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            'Основное' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Заголовок', 'title')->filter()->sortable(),
                Foreign::make('Тип', 'type_id')
                    ->options(
                        (new Options('type'))->keyField('title')
                    )->sortable()->filter(),

                Froala::make('Описание', 'description')->filter(),
                Image::make('Картинка', 'picture'),
                Checkbox::make('Активно', 'is_active')->filter()->sortable(),
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
            'Доктора' => [
                ManyToMany::make('Доктора')->options((new Options('doctors'))->keyField('full_name')),
            ],
            'Мы лечим' => [
                ManyToMany::make('Болезни')->options(new Options('illness')),
            ]
        ];
    }
}
