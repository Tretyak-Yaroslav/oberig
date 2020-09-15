<?php

namespace App\Cms\Definitions\HasManyBlocks;

use Vis\Builder\Fields\{Checkbox, Datetime,  Froala, Id, Text, Hidden};
use Vis\Builder\Definitions\Resource;

class NewsComments extends Resource
{
    public $model = \App\Models\HasMany\NewsComments::class;
    public $title = 'Комментарии';
    protected $orderBy = 'created_at desc';

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('news_id', 'news_id')->default(request('foreign_field_id')),
            Text::make('Имя', 'name')->filter(),
            Froala::make('Текст', 'text')->filter(),
            Checkbox::make('Отображать', 'is_active'),
            Datetime::make('Дата создания', 'created_at')
        ];
    }
}
