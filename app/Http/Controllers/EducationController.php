<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class EducationController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('education.index', compact('page'));
    }
}
