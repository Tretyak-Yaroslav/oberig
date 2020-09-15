<?php

namespace App\Cms\Definitions;

use Vis\Builder\Services\Actions;
use App\Models\Partner;
use Vis\Builder\Fields\{Checkbox, Id, Image, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class Partners extends Resource
{
    public $model = Partner::class;
    public $title = 'Партнёры';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language()->filter(),
            Image::make('Изображение', 'picture'),
            Checkbox::make('Активен', 'is_active')->filter(),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
