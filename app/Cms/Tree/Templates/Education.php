<?php

namespace App\Cms\Tree\Templates;

class Education extends Node
{
    protected $titleDefinition = 'Образование';
    public $action = 'EducationController@index';

    public function showTemplate() : ?array
    {
        return ['education_article', 'education_events'];
    }
}
