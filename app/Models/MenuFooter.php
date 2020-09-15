<?php

namespace App\Models;

use App\Traits\MenuTrait;
use Vis\Builder\Tree as TreeBuilder;

class MenuFooter extends TreeBuilder
{
    use MenuTrait;

    protected $table = 'footer_menu';
    protected $fillable = [];
    public $timestamps = false;

    public function tree()
    {
        return $this->belongsTo(Tree::class,'tb_tree_id');
    }
}
