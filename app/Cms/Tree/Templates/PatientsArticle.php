<?php

namespace App\Cms\Tree\Templates;

class PatientsArticle extends Node
{
    protected $titleDefinition = 'Пациентам статья';
    public $action = 'PatientsController@page';
}
