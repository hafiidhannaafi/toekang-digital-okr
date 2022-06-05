<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $fillable = [
        'name', 'positions_id','levels_id', 'address', 'phone', 'email', 'password'
    ];
    public function positions() // relasi tabel posisi ke kryawan
    {
        return $this->belongsTo(Position::class,'positions_id'); //1 karyawan mempunyai 1 posisi
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function levels()
    {
        return $this->belongsTo(Level::class);
    }
}
