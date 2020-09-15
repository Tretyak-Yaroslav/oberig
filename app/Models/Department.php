<?php

namespace App\Models;

class Department extends BaseModel
{
    protected $table = 'departments';
    protected $fillable = [];
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(
            Doctor::class,
            'doctor_department'
        );
    }

    public function illness()
    {
        return $this->belongsToMany(
            Illness::class,
            'department_illness'
        );
    }

    public function scopeAdult($q)
    {
        return $q->where('type_id', 1)->active()->orderBy('priority');
    }

    public function scopeChildren($q)
    {
        return $q->where('type_id', 2)->active()->orderBy('priority');
    }

    public function getUrl()
    {
        return route('departments', [$this->getSlug(), $this->id]);
    }
}
