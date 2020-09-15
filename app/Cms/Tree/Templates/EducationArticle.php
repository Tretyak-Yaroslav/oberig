<?php

namespace App\Cms\Tree\Templates;

class EducationArticle extends Node
{
    protected $titleDefinition = 'Образование статья';
    public $action = 'EducationController@page';
}
