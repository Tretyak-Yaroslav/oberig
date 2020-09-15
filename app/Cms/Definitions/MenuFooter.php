<?php

namespace App\Cms\Definitions;

use Vis\Builder\Definitions\ResourceAdditionTree;
use App\Models\MenuFooter as FooterMenuModel;
use Vis\Builder\Fields\{Checkbox, Datetime, Foreign, ForeignAjax, Hidden, Id, Text, Relations\Options};
use App\Fields\ForeignTree;

class MenuFooter extends ResourceAdditionTree
{
    public $model = FooterMenuModel::class;
    public $title = 'Меню Футер';
    protected $cacheTag = 'menu_footer';

    public function fields()
    {
        return [
            Hidden::make('#', 'id'),
            Text::make('Заголовок', 'title')->language(),
            ForeignTree::make('Меню из дерева', 'tb_tree_id')
                ->options((new Options('tree'))->keyField('title')),
            Text::make('Внутренняя ссылка', 'url'),
            Text::make('Внешняя ссылка', 'url_external'),
           // Checkbox::make('Открывать в новой вкладке', 'is_target_blank')
        ];
    }
}
