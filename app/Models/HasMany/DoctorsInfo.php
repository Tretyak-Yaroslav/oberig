<?php

namespace App\Models\HasMany;

use App\Models\BaseModel;

class DoctorsInfo extends BaseModel
{
    protected $table = 'doctors_info';
    protected $fillable = [];
    public $timestamps = false;
}
