<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class ReviewsController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('pages.reviews', compact('page'));
    }
}
