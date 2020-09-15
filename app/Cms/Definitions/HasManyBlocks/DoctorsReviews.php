<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\DoctorsReview;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{Checkbox, Froala, Hidden, Id, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class DoctorsReviews extends Resource
{
    public $model = DoctorsReview::class;
    public $title = 'Отзывы о Докторах';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Hidden::make('doctor_id', 'doctor_id')->default(request('foreign_field_id')),
            Text::make('ФИО', 'full_name'),
            Froala::make('Описание', 'description'),
            Checkbox::make('Активен', 'is_active')->filter(),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
