<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\DoctorsInfo;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Froala, Hidden, Id, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class DoctorsInfoItems extends Resource
{
    public $model = DoctorsInfo::class;
    public $title = 'Информация о Докторах';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('doctor_id', 'doctor_id')->default(request('foreign_field_id')),
            Text::make('Название', 'title')->language()->filter(),
            Froala::make('Описание', 'description')->language(),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
