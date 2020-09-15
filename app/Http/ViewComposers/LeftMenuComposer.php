<?php

namespace App\Http\ViewComposers;

use App\Models\MenuHeader;
use Illuminate\View\View;

class LeftMenuComposer
{
    public function compose(View $view)
    {
        $menu = MenuHeader::getMenu();

        $view->with(compact('menu'));
    }
}
