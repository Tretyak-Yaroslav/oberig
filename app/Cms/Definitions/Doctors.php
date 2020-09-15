<?php

namespace App\Cms\Definitions;

use App\Models\Doctor;
use Carbon\Carbon;
use Vis\Builder\Fields\{Checkbox, Definition, Froala, Hidden, Id, Image, Text, Readonly, Textarea, ManyToMany, Relations\Options};
use Vis\Builder\Definitions\Resource;
use App\Cms\Definitions\HasManyBlocks\{DoctorsInfoItems, DoctorsReviews};

class Doctors extends Resource
{
    public $model = Doctor::class;
    public $title = 'Доктора';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            'Общая' => [
                Id::make('#', 'id')->sortable(),
                Text::make('ФИО', 'full_name')->language()->filter(),
                Image::make('Изображение', 'picture'),
                Froala::make('Короткое описание', 'short_description')->language()->onlyForm(),
                Froala::make('Описание', 'description')->language()->onlyForm(),
                //   Readonly::make('ID страницы', 'tree_id'),
                //   Readonly::make('ID специализации', 'special_id'),
                ManyToMany::make('Тип')->options(new Options('types')),
                ManyToMany::make('Специальность')->options(new Options('specialties')),
                ManyToMany::make('Отделение')->options(new Options('departments')),

                Checkbox::make('Активен', 'is_active')->filter(),
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

            'Информация' => [
                Definition::make('Информация о Докторах')->hasMany('info', DoctorsInfoItems::class),
            ],

            'Отзывы' => [
                Definition::make('Отзывы о Докторах')->hasMany('reviews', DoctorsReviews::class),
            ],
        ];
    }
}
