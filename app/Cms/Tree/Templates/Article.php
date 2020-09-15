<?php

namespace App\Cms\Tree\Templates;

class Article extends Node
{
    protected $titleDefinition = 'Статья';
    public $action = 'ArticleController@index';
}
