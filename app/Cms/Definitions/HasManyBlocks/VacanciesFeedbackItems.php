<?php

namespace App\Cms\Definitions\HasManyBlocks;

use App\Models\HasMany\VacanciesFeedback;
use Vis\Builder\Services\Actions;
use Vis\Builder\Fields\{File, Id, Text, Readonly, Hidden};
use Vis\Builder\Definitions\Resource;

class VacanciesFeedbackItems extends Resource
{
    public $model = VacanciesFeedback::class;
    public $title = 'Отклики на Вакансии';
    protected $orderBy = 'priority asc';
    protected $isSortable = true;

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('ФИО', 'full_name')->filter(),
            Text::make('Email', 'email')->filter(),
            Text::make('Отклик на позицию', 'position')->filter(),
            File::make('Файл с резюме', 'resume_file'),
            Hidden::make('vacancy_id', 'vacancy_id')->default(request('foreign_field_id')),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->preview()->clone()->delete();
    }

}
