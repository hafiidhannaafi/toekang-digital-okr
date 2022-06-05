<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyresult extends Model
{
    use HasFactory;
    protected $tabel = "keyresults";

    protected $fillable = ['aspects'];

    public function appraisalaspects()
    {
        return $this->hasMany(appraisalaspect::class);
    }
}
