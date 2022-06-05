<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class appraisalaspect extends Model
{
    use HasFactory;
    protected $table = "appraisalaspects";

    protected $fillable = [
        'positions_id', 'objectiveaspects_id', 
        'keyresult_id', 'target', 'satuan'

    ];

    public function positions() // relasi tabel posisi ke kryawan
    {

        return $this->belongsTo(Position::class); //1 karyawan mempunyai 1 posisi
    }

    public function objectiveaspects() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(objectiveaspect::class, 'objectiveaspects_id'); //1 karyawan mempunyai 1 posisi
    }

    public function keyresults() //relasi tabel employee ke jenis posisi
    {
        return $this->belongsTo(Keyresult::class);
    }

}
