<?php

namespace App\Cms\Definitions\HasManyBlocks;

use Vis\Builder\Fields\{File, Froala, Id, Text, Image, Hidden};
use Vis\Builder\Definitions\Resource;

class NewsBlocks extends Resource
{
    public $model = \App\Models\HasMany\NewsBlocks::class;
    public $title = 'Блоки';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('news_id', 'news_id')->default(request('foreign_field_id')),
            Text::make('Заголовок', 'title')->language()->filter(),
            Froala::make('Описание', 'description')->language()->filter(),
            Image::make('Картинка', 'picture'),
            Text::make('Название файла', 'file_name')->language()->onlyForm(),
            File::make('Файла', 'file')->onlyForm()

        ];
    }
}
