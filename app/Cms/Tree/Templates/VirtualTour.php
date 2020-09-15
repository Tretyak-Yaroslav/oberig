<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Definition};

use App\Cms\Definitions\HasManyBlocks\TreeVirtualTurs;

class VirtualTour extends Node
{
    protected $titleDefinition = 'Виртуальный тур';
    public $action = 'VirtualTourController@index';

    public function fields()
    {
        $fields = parent::fields();
        $fields['Виртуальный тур'] = [
            Definition::make('Виртуальный тур')
                ->hasMany('virtualTours', TreeVirtualTurs::class)
        ];

        return $fields;
    }

}
