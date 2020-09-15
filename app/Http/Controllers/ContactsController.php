<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class ContactsController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        return view('pages.contacts', compact('page'));
    }
}
