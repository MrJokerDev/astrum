<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mentor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
