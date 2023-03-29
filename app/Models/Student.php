<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'select_course',
        'highest_qualification',
        'cv_file'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}