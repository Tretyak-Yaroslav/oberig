<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Vis\Builder\TreeController;

class DepartmentsController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        $adult = Department::adult()->get();
        $children = Department::children()->get();

        return view('departments.index', compact('page', 'adult', 'children'));
    }

    public function page($slug, $id)
    {
        $page =  Department::pageInfo($slug, $id);

        return view('departments.page', compact('page'));
    }
}
