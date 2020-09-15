<?php

namespace App\Cms\Definitions;

use App\Models\Vacancy;
use Vis\Builder\Fields\{ Id, Text};
use Vis\Builder\Definitions\Resource;
use App\Models\VacancySpecialty as VacancySpecialtyModel;
use Vis\Builder\Services\Actions;

class VacancySpecialty extends Resource
{
    public $model = VacancySpecialtyModel::class;
    public $title = 'Специальности';
    protected $orderBy = 'id desc';

    public function fields()
    {
        return [
            Id::make('#', 'id')->sortable(),
            Text::make('Название', 'title')->language()->filter(),
        ];
    }

    public function actions()
    {
        return Actions::make()->insert()->update()->clone()->delete();
    }
}
