<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolls extends Model
{
    use HasFactory;
    protected $table = 'enrolls';
    protected $fillable = ['name','email','phone','course','age','student_gender','teacher_gender','plan','days'];

    //format the date in this model
    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

}
