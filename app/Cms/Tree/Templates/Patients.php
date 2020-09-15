<?php

namespace App\Cms\Tree\Templates;

class Patients extends Node
{
    protected $titleDefinition = 'Пациентам';
    public $action = 'PatientsController@index';

    public function showTemplate() : ?array
    {
        return ['patients_article'];
    }
}
