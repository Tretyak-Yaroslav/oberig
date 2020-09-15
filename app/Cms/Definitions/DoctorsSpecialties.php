<?php

namespace App\Cms\Definitions;

use App\Models\DoctorsSpecialty;
use Vis\Builder\Fields\{ Id, Text};
use Vis\Builder\Definitions\Resource;
use Vis\Builder\Services\Actions;

class DoctorsSpecialties extends Resource
{
    public $model = DoctorsSpecialty::class;
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
