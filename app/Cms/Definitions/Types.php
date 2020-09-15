<?php

namespace App\Cms\Definitions;

use Vis\Builder\Services\Actions;
use App\Models\Type;
use Vis\Builder\Fields\{Datetime, Id, Text};
use Vis\Builder\Definitions\Resource;

class Types extends Resource
{
    public $model = Type::class;
    public $title = 'Типы';
    protected $orderBy = 'id asc';

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language()->filter()->sortable(),
        ];
    }

    public function actions()
    {
        return Actions::make()->update();
    }
}
