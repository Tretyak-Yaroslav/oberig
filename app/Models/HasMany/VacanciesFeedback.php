<?php

namespace App\Models\HasMany;

use App\Models\BaseModel;
use App\Models\Vacancy;

class VacanciesFeedback extends BaseModel
{
    protected $table = 'vacancies_feedback';
    protected $fillable = [];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
