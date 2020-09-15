<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class HeaderComposer
{
    public function compose(View $view)
    {
        $languages = [
            'ua' => 'УКР',
            'ru' => 'РУС',
            'en' => 'ENG'
        ];

        $currentLanguage = (isset($languages[App::getLocale()])) ? $languages[App::getLocale()] : $languages['ua'];

        $view->with(compact('languages', 'currentLanguage'));
    }
}
