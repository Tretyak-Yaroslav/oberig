<?php

namespace App\Http\Controllers;

use Vis\Builder\TreeController;

class TestController extends TreeController
{
    public function getSitemap()
    {
        return file_get_contents(public_path() . '/sitemap_test.xml');
    }
}
