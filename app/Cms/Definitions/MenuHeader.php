<?php

namespace App\Cms\Definitions;

use Vis\Builder\Definitions\ResourceAdditionTree;
use App\Models\MenuHeader as MenuHeaderModel;
use Vis\Builder\Fields\{Datetime, Foreign, ForeignAjax, Hidden, Id, Text, Relations\Options, Checkbox};
use App\Fields\ForeignTree;

class MenuHeader extends ResourceAdditionTree
{
    public $model = MenuHeaderModel::class;
    public $title = 'Меню Хеадер';
    protected $cacheTag = 'menu_header';

    public function fields()
    {
        return [
            Hidden::make('#', 'id'),
            Text::make('Заголовок', 'title')->language(),
            ForeignTree::make('Меню из дерева', 'tb_tree_id')
                ->options((new Options('tree'))
                    ->keyField('title')),
            Text::make('Внутренняя ссылка', 'url'),
            Text::make('Внешняя ссылка', 'url_external'),
           // Checkbox::make('Открывать в новой вкладке', 'is_target_blank')
        ];
    }
}
