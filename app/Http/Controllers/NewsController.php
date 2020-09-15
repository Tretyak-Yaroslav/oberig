<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Tree;
use Vis\Builder\TreeController;

class NewsController extends TreeController
{
    public function index()
    {
        $page = $this->node;
        $categories = Category::orderPriority()->get();

        return view('news.index', compact('page', 'categories'));
    }

    public function category(Category $category)
    {
        $page = $category;

        return view('news.category', compact('page'));
    }

    public function page(Category $category, $slug, $id)
    {
        $page = News::pageInfo($slug, $id);
        $newsAll = Tree::whereTemplate('news')->first();
        $page->load('blocks');

        return view('news.page', compact('page', 'category', 'newsAll'));
    }
}
