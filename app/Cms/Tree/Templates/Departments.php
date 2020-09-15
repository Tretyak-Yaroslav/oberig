<?php

namespace App\Cms\Tree\Templates;

class Departments extends Node
{
    protected $titleDefinition = 'Отделения';
    public $action = 'DepartmentsController@index';
}
