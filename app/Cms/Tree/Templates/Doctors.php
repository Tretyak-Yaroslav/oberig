<?php

namespace App\Cms\Tree\Templates;

use Vis\Builder\Fields\{Checkbox, Froala, Id, Image, MultiImage, Text, Textarea};

use Vis\Builder\Definitions\ResourceTree;

class Doctors extends Node
{
    protected $titleDefinition = 'Доктора';
    public $action = 'DoctorsController@index';
}
