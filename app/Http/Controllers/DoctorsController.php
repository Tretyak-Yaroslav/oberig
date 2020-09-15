<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorsSpecialty;
use App\Models\Type;
use Vis\Builder\TreeController;

class DoctorsController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        $doctors = Doctor::active()->paginate(3);
        $specialties = DoctorsSpecialty::orderBy('title', 'asc')->get();
        $types = Type::orderBy('id')->get();

        return view('doctors.index', compact('page', 'doctors', 'specialties', 'types'));
    }

    public function showPage($slug, $id)
    {
        $page = Doctor::pageInfo($slug, $id);

        $page->load('info');

        return view('doctors.page', compact('page'));

    }
}
