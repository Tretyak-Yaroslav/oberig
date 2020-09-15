<?php

namespace App\Cms\Definitions;

use App\Models\Category;
use Vis\Builder\Fields\{Datetime, Id, Text};
use Vis\Builder\Definitions\Resource;
use Illuminate\Validation\Rule;

class Categories extends Resource
{
    public $model = Category::class;
    public $title = 'Категории';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language()->filter()->sortable()->transliteration('slug'),
            Text::make('Url', 'slug')->filter()->sortable()->rules([
                'required',
                Rule::unique('categories')->ignore(request('id')),
            ]),
        ];
    }
}
