<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Vis\Builder\TreeController;

class VacanciesController extends TreeController
{
    public function index()
    {
        $page = $this->node;

        $vacancies = Vacancy::active()->paginate(6);

        return view('vacancies.index', compact('page', 'vacancies'));
    }

    public function showPage($slug, $id)
    {
        $page = Vacancy::pageInfo($slug, $id);

        return view('vacancies.vacancy_one', compact('page'));
    }
}
