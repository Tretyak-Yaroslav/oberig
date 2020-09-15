<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class HomeController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('home.index', compact('page'));
    }
}
