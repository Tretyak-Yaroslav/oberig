<?php

namespace App\Models\MorphOne;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use \Vis\Builder\Helpers\Traits\TranslateTrait;

    protected $table = 'seo';
    protected $guarded = [];
    public $timestamps = false;
}
