<?php

namespace App\Cms\Tree\Templates;

class Diagnosis extends Node
{
    protected $titleDefinition = 'Диагностики и лечения';
    public $action = 'DiagnosisController@index';
}
