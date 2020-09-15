<?php

namespace App\Models;

class PreparationSurvey extends BaseModel
{
    protected $table = 'preparation_survey';
    protected $fillable = [];
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
