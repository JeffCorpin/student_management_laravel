<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
     protected $primaryKey = 'id';
      protected $fillable = [ 
        'course_code',
        'course_name',
        'description',
        'credits',
        'instructor_id',
        'semester',
        'year',
        'department'];
    use HasFactory;
}
