<?php

namespace App\Models;

use App\Models\HasMany\Team;
use App\Models\HasMany\TreeBlock;
use App\Models\HasMany\TreeVirtualTur;
use Illuminate\Support\Facades\App;
use Vis\Builder\Tree as TreeBuilder;
use App\Traits\SeoTrait;
use App\Models\MorphOne\Seo;

class Tree extends TreeBuilder
{
    use SeoTrait;

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seo');
    }

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function virtualTours()
    {
        return $this->hasMany(TreeVirtualTur::class);
    }

    public function blocks()
    {
        return $this->hasMany(TreeBlock::class);
    }

    public static function getFirstDepthNodes()
    {
        return self::where('depth', '1')->get();
    }

    // end getFirstDepthNodes

    public function scopeActive($query)
    {
        return $query->where('is_active', '1');
    }

    // end scopeActive

    public function scopePriorityAsc($query)
    {
        return $query->orderBy('lft', 'asc');
    }

    // end scopeMain

    public function getDate()
    {
        return Util::getDate($this->created_at);
    }

    // end getDate

    //url page
    public function getUrl()
    {
        return geturl(parent::getUrl(), App::getLocale());
    }

}
