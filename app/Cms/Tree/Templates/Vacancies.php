<?php

namespace App\Cms\Tree\Templates;

class Vacancies extends Node
{
    protected $titleDefinition = 'Вакансии';
    public $action = 'VacanciesController@index';
}
