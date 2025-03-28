<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class); 
    } 

    public function course() 
    {
        return $this->hasMany(Course::class); 
    } 
}
