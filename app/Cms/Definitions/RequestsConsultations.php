<?php

namespace App\Cms\Definitions;

use App\Models\RequestsConsultation;
use Vis\Builder\Services\Actions;
use Carbon\Carbon;
use Vis\Builder\Fields\{Hidden, Id, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class RequestsConsultations extends Resource
{
    public $model = RequestsConsultation::class;
    public $title = 'Записи на консультацию';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('ФИО', 'full_name')->filter(),
            Text::make('Телефон', 'phone')->filter(),
            Text::make('Email', 'email')->filter(),
            Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
            Hidden::make('Дата обновления', 'updated_at'),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
