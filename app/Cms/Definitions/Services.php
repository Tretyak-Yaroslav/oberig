<?php

namespace App\Cms\Definitions;

use App\Models\Service;
use Vis\Builder\Fields\{Datetime, Id, MultiImage, Text, Image};
use Vis\Builder\Definitions\Resource;

class Services extends Resource
{
    public $model = Service::class;
    public $title = 'Услуги';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language()->filter()->sortable(),
            Image::make('Фото', 'picture'),
            MultiImage::make('Галерея', 'addition_pictures'),
        ];
    }
}
