<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;
    public function courseLogo(): HasMany
    {
        return $this->hasMany(Course_logo::class, 'course_id', 'id');
    }

    public function langs(): HasMany
    {
        return $this->hasMany(Lang::class, 'table_info_id')->where('table_name', 'courses');
    }

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class, 'course_id', 'id');
    }

    public function mentors(): HasMany
    {
        return $this->hasMany(Mentor::class, 'course_id', 'id');
    }

    public function mentor_text(): HasMany
    {
        return $this->hasMany(Lang::class, 'course_id', 'id');
    }
}
