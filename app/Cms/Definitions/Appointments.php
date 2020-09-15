<?php

namespace App\Cms\Definitions;

use App\Models\Appointment;
use Vis\Builder\Services\Actions;
use Carbon\Carbon;
use Vis\Builder\Fields\{Hidden, Id, Text, Readonly};
use Vis\Builder\Definitions\Resource;

class Appointments extends Resource
{
    public $model = Appointment::class;
    public $title = 'Записи на приём';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Имя', 'first_name')->filter(),
            Text::make('Отчество', 'middle_name')->filter(),
            Text::make('Фамилия', 'last_name')->filter(),
            Text::make('Телефон', 'phone')->filter(),
            Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
            Hidden::make('Дата обновления', 'updated_at'),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
