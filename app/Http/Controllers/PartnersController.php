<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Vis\Builder\TreeController;

class PartnersController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        $partners = Partner::active()->get()->chunk(5);

        return view('pages.partners', compact('page', 'partners'));
    }
}
