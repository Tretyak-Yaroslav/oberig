<?php

namespace App\Models;

use App\Traits\MenuTrait;
use Vis\Builder\Tree as TreeBuilder;

class MenuHeader extends TreeBuilder
{
    use MenuTrait;

    protected $table = 'menu_header';
    protected $fillable = [];
    public $timestamps = false;

    public function tree()
    {
        return $this->belongsTo(Tree::class,'tb_tree_id');
    }

    static function getMenu()
    {
        $menuAll = self::with('tree', 'children')
            ->withCount('children')
            ->defaultOrder()
            ->get()
            ->toTree();

        return $menuAll[0]->children->map(function ($tree){

            $isActive = false;  //strpos(request()->url(), $tree->getUrl()) !== false ? true : false;

            return [
                'id' => $tree->id,
                'title' => $tree->t('title'),
                'link' => $tree->getUrl(),
                'hasSubmenu' => $tree->isHasChildren() ? true : false,
                'isActive' => $isActive,
                'groups' => [
                    [
                        'title_group' => 'Test',
                        'titles' => [
                            [
                                'text' => 'test link'
                            ]
                        ]
                    ]
                ]
            ];
        }) ;
    }
}
