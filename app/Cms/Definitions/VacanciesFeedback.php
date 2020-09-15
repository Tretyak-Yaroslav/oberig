<?php

namespace App\Cms\Definitions;

use App\Models\HasMany\VacanciesFeedback as VacanciesFeedbackModel;
use Carbon\Carbon;
use Vis\Builder\Fields\{
    File,
    Hidden,
    Id,
    Text,
    Foreign,
    Readonly,
    Relations\Options};
use Vis\Builder\Definitions\Resource;

class VacanciesFeedback extends Resource
{
    public $model = VacanciesFeedbackModel::class;
    public $title = 'Отклики';

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Имя', 'full_name')->filter(),
            Text::make('Email', 'email'),
            Text::make('Должность', 'position'),
            File::make('Файл', 'resume_file'),

            Foreign::make('Вакансия', 'vacancy_id')
                ->options(
                    (new Options('vacancy'))->keyField('title')
                )->sortable()->filter(),

            Readonly::make('Дата создания', 'created_at')->default(Carbon::now())->sortable(),
            Hidden::make('Дата обновления', 'updated_at'),
        ];
    }
}
