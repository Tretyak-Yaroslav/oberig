<?php

namespace App\Cms\Definitions;

use App\Cms\Definitions\HasManyBlocks\{NewsBlocks, NewsComments};
use App\Models\News as NewsModel;
use Carbon\Carbon;
use Vis\Builder\Fields\{Checkbox, Foreign, Froala, Hidden, Id, Image, Text, Readonly, Textarea, ManyToMany, Definition};
use Vis\Builder\Definitions\Resource;
use Vis\Builder\Fields\Relations\Options;

class News extends Resource
{
    public $model = NewsModel::class;
    public $title = 'Новости';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            'Общая' => [
                Id::make('#', 'id')->sortable(),
                Foreign::make('Категория', 'category_id')
                    ->options(
                        (new Options('category'))->keyField('title')
                    )->sortable()->filter(),
                Text::make('Название', 'title')->language()->filter(),
                Froala::make('Короткое описание', 'short_description')->language()->onlyForm(),
                Froala::make('Описание', 'description')->language()->onlyForm(),
                Image::make('Изображение', 'picture'),
                Checkbox::make('Активен', 'is_active')->filter(),
                ManyToMany::make('Теги')->options(new Options('tags')),
                Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
                Hidden::make('Дата обновления', 'updated_at'),
            ],
            'Блоки' => [
                Definition::make('Блоки')->hasMany('blocks', NewsBlocks::class),
            ],

            'Комментарии' => [
                Definition::make('Комментарии')->hasMany('comments', NewsComments::class),
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
