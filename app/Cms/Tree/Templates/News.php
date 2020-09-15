<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Checkbox, Froala, Id, Image, MultiImage, Text, Textarea};

use Vis\Builder\Definitions\ResourceTree;

class News extends Node
{
    protected $titleDefinition = 'Новости';
    public $action = 'NewsController@index';
}
