<?php

namespace App\Search;

use Algolia\ScoutExtended\Searchable\Aggregator;
use App\Models\Doctor;
use App\Models\News;
use App\Models\Tree;

class Content extends Aggregator
{
    /**
     * The names of the models that should be aggregated.
     *
     * @var string[]
     */
    protected $models = [
        News::class,
        Tree::class,
        Doctor::class
    ];

    protected $relations = [
        News::class => ['blocks'],
    ];
}
