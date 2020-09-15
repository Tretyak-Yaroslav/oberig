<?php

namespace App\Http\ViewComposers;

use App\Models\Tree;
use Illuminate\View\View;

class RightMenuComposer
{
    public function compose(View $view)
    {
        $menu = Tree::where('is_show_right_menu', 1)->priorityAsc()->get();

        $view->with(compact('menu'));
    }
}
