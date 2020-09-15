<?php

namespace App\Cms\Tree\Templates;

class EducationEvents extends Node
{
    protected $titleDefinition = 'Образование мероприятия';
    public $action = 'EducationController@events';

    public function showTemplate() : ?array
    {
        return ['education_article', 'education_events'];
    }
}
