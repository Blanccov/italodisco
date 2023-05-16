<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    public function students(){
        return $this->belongsToMany(Student::class, 'student_departaments', 'departament_id', 'student_id', 'result_id');
    }

    public $timestamps = false;
}
