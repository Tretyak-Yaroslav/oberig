<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class PatientsController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('patients.index', compact('page'));
    }

    public function page()
    {
        $page = $this->node;

        return view('patients.page', compact('page'));
    }
}
