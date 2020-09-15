<?php

namespace App\Models;

use App\Models\HasMany\{DoctorsInfo, DoctorsReview};
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Doctor extends BaseModel
{
    use Searchable;

    protected $table = 'doctors';
    protected $fillable = [];

    public function info()
    {
        return $this->hasMany(DoctorsInfo::class);
    }

    public function reviews()
    {
        return $this->hasMany(DoctorsReview::class);
    }

    public function types()
    {
        return $this->belongsToMany(
            Type::class,
            'doctor_type'
        );
    }

    public function specialties()
    {
        return $this->belongsToMany(
            DoctorsSpecialty::class,
            'doctor_doctors_specialty'
        );
    }

    public function departments()
    {
        return $this->belongsToMany(
            Department::class,
            'doctor_department'
        );
    }

    public function getTitle()
    {
        return $this->t('full_name');
    }

    public function getUrl()
    {
        return route('doctor', [$this->getSlug(), $this->id]);
    }

    public function getSlug()
    {
        return Str::slug(strip_tags($this->full_name));
    }

    public function getSeoTitle()
    {
        if ($this->seo && $this->seo->t('seo_title')) {
            return strip_tags($this->seo->t('seo_title'));
        } elseif ($this->t('full_name')) {
            return strip_tags($this->t('full_name')) . ' ' . __t('Клініка Оберіг') ;
        }
    }

    public function getSeoDescription()
    {
        if ($this->seo && $this->seo->t('seo_description')) {
            return strip_tags($this->seo->t('seo_description'));
        } elseif ($this->t('description')) {
            return strip_tags($this->t('description')) . ' ' . __t('Клініка Оберіг');
        }
    }

    public function getNode()
    {
        return Tree::whereTemplate('doctors')->first();
    }


}
