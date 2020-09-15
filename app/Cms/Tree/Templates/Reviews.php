<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Checkbox, Froala, Id, Image, MultiImage, Text, Textarea};

use Vis\Builder\Definitions\ResourceTree;

class Reviews extends Node
{
    protected $titleDefinition = 'Отзывы клиники';
    public $action = 'ReviewsController@index';
}
