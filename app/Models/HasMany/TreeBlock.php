<?php

namespace App\Models\HasMany;

use App\Models\{Tree, BaseModel};

class TreeBlock extends BaseModel
{
    protected $table = 'tree_blocks';
    protected $fillable = [];
    public $timestamps = false;

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }
}
