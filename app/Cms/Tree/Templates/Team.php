<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Definition};

use App\Cms\Definitions\HasManyBlocks\Teams;

class Team extends Node
{
    protected $titleDefinition = 'Адміністрація';
    public $action = 'TeamController@index';

    public function fields()
    {
        $fields = parent::fields();
        $fields['Команда'] = [
            Definition::make('Команда')
                ->hasMany('team', Teams::class)
        ];

        return $fields;
    }
}
