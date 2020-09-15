<?php

namespace App\Models\HasMany;

use App\Models\BaseModel;
use App\Models\News;

class NewsBlocks extends BaseModel
{
    protected $table = 'news_blocks';
    public $timestamps = false;

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
