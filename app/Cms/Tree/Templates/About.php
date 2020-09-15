<?php

namespace App\Cms\Tree\Templates;

use App\Cms\Definitions\HasManyBlocks\TreeBlocks;
use Vis\Builder\Fields\{Definition};

class About extends Node
{
    protected $titleDefinition = 'Про нас';
    public $action = 'AboutController@index';

    public function fields()
    {
        $fields = parent::fields();
        $fields['Блоки'] = [
            Definition::make('Блоки')
                ->hasMany('blocks', TreeBlocks::class)
        ];

        return $fields;
    }
}
