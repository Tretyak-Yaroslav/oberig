<?php

namespace App\Models\HasMany;

use App\Models\BaseModel;
use App\Models\News;

class NewsComments extends BaseModel
{
    protected $table = 'news_comments';

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
