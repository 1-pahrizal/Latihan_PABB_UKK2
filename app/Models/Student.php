<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'phj_students';
    protected $fillable = ['nis', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'class_id', 'nomor_Telepon', 'alamat','asal_sekolah'];
}
