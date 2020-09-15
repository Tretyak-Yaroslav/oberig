<?php

namespace App\Models;

use App\Models\HasMany\NewsBlocks;
use App\Models\HasMany\NewsComments;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class News extends BaseModel
{
    use Searchable;

    protected $table = 'news';
    protected $fillable = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(
            Tag::class
        );
    }

    public function blocks()
    {
        return $this->hasMany(NewsBlocks::class);
    }

    public function comments()
    {
        return $this->hasMany(NewsComments::class);
    }

    public function getUrl()
    {
        return route('news.page', [$this->category->slug, $this->getSlug(), $this->id]);
    }

    public function getNode()
    {
        return Tree::whereTemplate('news')->first();
    }
}
