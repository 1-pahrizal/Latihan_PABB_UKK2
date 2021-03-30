<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'phj_students';
    protected $fillable = ['nis', 'name', 'birth_date', 'gender', 'class_id', 'phone', 'address'];
}
