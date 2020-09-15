<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class AboutController extends TreeController
{
    public function index()
    {
        $page = $this->node;
        $page->load('blocks');

        return view('pages.about', compact('page'));
    }
}
