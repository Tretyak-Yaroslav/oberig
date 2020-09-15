<?php

namespace App\Cms\Definitions;

use Vis\Builder\Services\Actions;
use App\Models\Tag;
use Vis\Builder\Fields\{Datetime, Id, Text};
use Vis\Builder\Definitions\Resource;

class Tags extends Resource
{
    public $model = Tag::class;
    public $title = 'Теги';
    protected $orderBy = 'id desc';

    public function fields()
    {
        return [
            'test' => [
                Id::make('#', 'id')->sortable(),
                Text::make('Название', 'title')->language()->filter()->sortable(),
            ],
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->clone()->delete();
    }
}
