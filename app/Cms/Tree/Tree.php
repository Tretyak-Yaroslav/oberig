<?php

namespace App\Cms\Tree;

use App\Cms\Tree\Templates\{Contacts, Doctors, Node, News, Partners, Reviews, Vacancies, Departments, Team,
    VirtualTour, About, Patients, PatientsArticle, Education, EducationArticle, EducationEvents, Article, Diagnosis};
use Vis\Builder\Definitions\BaseTree;

class Tree extends BaseTree
{
    public function templates()
    {
        return [
            'main' => Node::class,
            'contacts' => Contacts::class,
            'news' => News::class,
            'partners' => Partners::class,
            'vacancies' => Vacancies::class,
            'reviews' => Reviews::class,
            'doctors' => Doctors::class,
            'departments' => Departments::class,
            'team' => Team::class,
            'virtual_tour' => VirtualTour::class,
            'about' => About::class,
            'patients' => Patients::class,
            'patients_article' => PatientsArticle::class,
            'education' => Education::class,
            'education_article' => EducationArticle::class,
            'education_events' => EducationEvents::class,
            'article' => Article::class,
            'diagnosis' => Diagnosis::class
        ];
    }
}
