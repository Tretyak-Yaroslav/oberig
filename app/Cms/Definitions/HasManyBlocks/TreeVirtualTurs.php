<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\TreeVirtualTur;
use Vis\Builder\Fields\{Textarea, Id, Text, Hidden};
use Vis\Builder\Definitions\Resource;

class TreeVirtualTurs extends Resource
{
    public $model = TreeVirtualTur::class;
    public $title = 'Виртуальные туры';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('tree_id', 'tree_id')->default(request('foreign_field_id')),
            Text::make('Заголовок', 'title')->language()->filter()->sortable(),
            Textarea::make('Код', 'code')->onlyForm()->filter()->sortable(),
        ];
    }
}
