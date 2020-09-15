<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class VirtualTourController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('pages.virtual_tour', compact('page'));
    }
}
