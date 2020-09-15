<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\Breadcrumbs;

class BreadcrumbsComposer
{
    public function compose(View $view)
    {
        if (! isset($view->getData()['page'])) {
            return 'Не передан параметр';
        }

        $page = $view->getData()['page'];

        //if node
        if (get_class($page) == 'App\Models\Tree') {
            $breadcrumbs = new Breadcrumbs($page);
        } else {
            $node = $page->getNode();
            $breadcrumbs = new Breadcrumbs($node);
            $breadcrumbs->add($page->getUrl(), $page->getTitle());
        }

        $view->with(compact('breadcrumbs'));
    }
}
