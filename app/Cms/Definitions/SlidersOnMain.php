<?php

namespace App\Cms\Definitions;

use Vis\Builder\Services\Actions;
use App\Models\SlidersOnMain as SlidersOnMainModel;
use Vis\Builder\Fields\{Datetime, Id, Image, Text};
use Vis\Builder\Definitions\Resource;

class SlidersOnMain extends Resource
{
    public $model = SlidersOnMainModel::class;
    public $title = 'Слайдеры на главной';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Заголовок', 'title')->language()->filter()->sortable(),
            Text::make('Под заголовок', 'sub_title')->language()->filter()->sortable(),
            Text::make('Ссылка', 'link')->language()->filter()->sortable(),
            Image::make('Картинка', 'picture')->filter()->sortable(),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->clone()->delete();
    }

}
