<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $table = 'categories';
    protected $fillable = [];
    public $timestamps = false;

    public $with = 'news';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function news()
    {
        return $this->hasMany(News::class)->active()->orderPriority();
    }

    public function getUrl()
    {
        return route('news.category', $this->slug) ;
    }

    public function newsJson()
    {
       return $this->news->map(function ($newsOne){
           return [
               'id' => $newsOne->id,
               'title' => $newsOne->t('title'),
               'link' => $newsOne->getUrl(),
               'p' => $this->t('title'),
               'time' => $newsOne->humanDate('created_at'),
               'img' => $newsOne->getImgPath(317, 317)
           ];
       }) ;
    }
}
