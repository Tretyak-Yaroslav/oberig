<?php

namespace App\Models\HasMany;

use App\Models\BaseModel;
use App\Models\Tree;

class Team extends BaseModel
{
    protected $table = 'team';
    protected $fillable = [];
    public $timestamps = false;

    public function tree()
    {
        return $this->belongsTo(Tree::class);
    }
}
