<?php

namespace App\Cms\Definitions;

use App\Models\Vacancy;
use Carbon\Carbon;
use Vis\Builder\Fields\{Checkbox, Definition, Froala, Hidden, Id, Text, Readonly, Textarea, ManyToMany, Relations\Options};
use Vis\Builder\Definitions\Resource;
use App\Cms\Definitions\HasManyBlocks\VacanciesFeedbackItems;

class Vacancies extends Resource
{
    public $model = Vacancy::class;
    public $title = 'Вакансии';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            'Общая' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Название', 'title')->language()->filter(),
                Hidden::make('Slug', 'slug'),
                Froala::make('Описание', 'description')->language()->onlyForm(),
                Checkbox::make('Активен', 'is_active')->filter(),
                ManyToMany::make('Специальности')->options(new Options('specialties')),
                Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
                Hidden::make('Дата обновления', 'updated_at'),
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

            'Отклики' => [
                Definition::make('Отклики на Вакансии')->hasMany('feedback', VacanciesFeedbackItems::class),
            ]
        ];
    }
}
