<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class DiagnosisController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('diagnosis.index', compact('page'));
    }
}
