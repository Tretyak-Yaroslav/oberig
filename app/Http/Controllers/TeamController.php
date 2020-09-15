<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class TeamController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('pages.team', compact('page'));
    }
}
