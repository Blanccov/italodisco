<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function results(){
        return $this->belongsToMany(Student_departaments::class, 'student_departaments', 'studetn_id', 'departament_id', 'result_id');
    }

    public $timestamps = false;
}
