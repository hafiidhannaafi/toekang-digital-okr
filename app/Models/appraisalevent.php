<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appraisalevent extends Model
{
    use HasFactory;
    protected $table="appraisalevents";

    protected $fillable =[
        'periode_event', 'datetime',
        'id_employee', 'total_score', //'no_referensi'
    ];

    public function positions() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(Position::class); //1 appevent mempunyai 1 posisi
    }

    public function employees() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(employee::class); //1 appevent mempunyai 1 posisi
    }

    public function appeventdetails()
    {
        return $this->belongsTo(appeventdetail::class);
    }

    
}
