<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = "levels";
    protected $fillable = [
        'nama'
    ];
    
    public function employees() // relasi tabel posisi ke kryawan
    {
        return $this->hasMany(employee::class); //1 karyawan mempunyai 1 posisi
    }
}
