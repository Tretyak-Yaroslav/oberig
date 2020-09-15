<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\TreeBlock;
use Vis\Builder\Fields\{Froala, Hidden, Id, Text};
use Vis\Builder\Definitions\Resource;

class TreeBlocks extends Resource
{
    public $model = TreeBlock::class;
    public $title = 'Блоки';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('tree_id', 'tree_id')->default(request('foreign_field_id')),
            Text::make('Заголовок', 'title')->language()->filter()->sortable(),
            Froala::make('Описание', 'description')->language()->filter()->sortable(),
        ];
    }
}
