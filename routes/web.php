<?php

Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('category', '[a-z0-9-]+');

Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function () {
        Route::get('/articles/{slug}-{id}', 'ArticlesController@showPage')->name('articles_article');
        Route::get('/product/{slug}-{id}', 'ProductController@showPage')->name('product');

        Route::get('/news/{category}', 'NewsController@category')->name('news.category');
        Route::get('/news/{category}/{slug}-{id}', 'NewsController@page')->name('news.page');

        Route::get('/vacancy/{slug}-{id}', 'VacanciesController@showPage')->name('vacancy');
        Route::get('/doctor/{slug}-{id}', 'DoctorsController@showPage')->name('doctor');
        Route::get('/departments/{slug}-{id}', 'DepartmentsController@page')->name('departments');

        Route::get('/search', 'SearchController@index')->name('search');
    }
);

Route::get('/pages-test', 'TestController@getSitemap')->name('sitemap');
