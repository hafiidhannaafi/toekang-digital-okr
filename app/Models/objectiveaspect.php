<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class objectiveaspect extends Model
{
    use HasFactory;
    protected $table = "objectiveaspects";

    protected $fillable = [
        'description'
    ];

    public function appraisalaspects() //relasi tabel employee ke jenis posisi
    {

        return $this->hasMany(appraisalaspect::class);
    }
}
