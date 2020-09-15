<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\Team;
use Vis\Builder\Fields\{Datetime, Hidden, Id, Image, Text, Textarea};
use Vis\Builder\Definitions\Resource;

class Teams extends Resource
{
    public $model = Team::class;
    public $title = 'Команда';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('tree_id', 'tree_id')->default(request('foreign_field_id')),
            Text::make('ФИО', 'fio')->filter()->language()->sortable(),
            Text::make('Должность', 'position')->language()->filter()->sortable(),
            Textarea::make('Описание', 'description')->language()->filter()->sortable(),
            Image::make('Фото', 'picture')->filter()->sortable(),
        ];
    }
}
