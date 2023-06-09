<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Student extends Model
{
    use HasFactory;

    public function addresses(){
        return $this->hasOne(Address::class);
    }

    public function departaments(){
        return $this->belongsToMany(Departament::class, 'student_departaments', 'student_id', 'departament_id', 'result_id');
    }

    public function results(){
        return $this->hasMany(Result::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function roles(){
        return $this->belongsTo(Role::class);
    }

    public $timestamps = false;
}
