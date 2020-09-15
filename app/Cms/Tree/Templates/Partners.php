<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Checkbox, Froala, Id, Image, MultiImage, Text, Textarea};

use Vis\Builder\Definitions\ResourceTree;

class Partners extends Node
{
    protected $titleDefinition = 'Партнеры клиники';
    public $action = 'PartnersController@index';
}
