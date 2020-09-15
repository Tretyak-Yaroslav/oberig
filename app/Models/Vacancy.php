<?php

namespace App\Models;

use App\Models\HasMany\VacanciesFeedback;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vacancy extends BaseModel
{
    protected $table = 'vacancies';
    protected $fillable = [];

    public function feedback()
    {
       return $this->hasMany(VacanciesFeedback::class);
    }

    public function specialties(): BelongsToMany
    {
        return $this->belongsToMany(
            VacancySpecialty::class,
            'vacancies_vacancy_specialty',
            'vacancy_id',
            'vacancy_specialty_id'
        );
    }

    public function getUrl()
    {
        return route('vacancy', [$this->getSlug(), $this->id]);
    }
}
