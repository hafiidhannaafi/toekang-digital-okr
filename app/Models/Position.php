<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class Position extends Model
{
    use HasFactory;
    protected $table = "positions";
    protected $fillable = [
        'nama_posisi'
    ];

    public function employees() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(employee::class);
    }

    public function appraisalaspects() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(appraisalaspect::class);
    }
}
//hasmany = 1 puny Bnyak //ini mendefinisikan relasi
//belongsto = 1 punya 1
//manytomany