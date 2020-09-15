<?php

namespace App\Models\HasMany;

use App\Models\{Tree, BaseModel};


class TreeVirtualTur extends BaseModel
{
    protected $table = 'tree_virtual_turs';
    protected $fillable = [];
    public $timestamps = false;

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }
}
