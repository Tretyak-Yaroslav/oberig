<?php

namespace App\Cms\Definitions;

use Vis\Builder\Services\Actions;
use App\Models\Review;
use Carbon\Carbon;
use Vis\Builder\Fields\{Checkbox, Hidden, Id, Image, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class Reviews extends Resource
{
    public $model = Review::class;
    public $title = 'Отзывы';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title'),
            Text::make('Описание', 'description')->onlyForm(),
            Image::make('Изображение', 'picture'),
            Checkbox::make('Активен', 'is_active')->filter(),
            Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
            Hidden::make('Дата обновления', 'updated_at'),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
