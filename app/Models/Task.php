<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table='tasks';
    protected $fillable=[
        'product_id',
        'name',
        'status',
    ];

public function products()
    {
        return $this->belongsTo(Product::class);
    }

public function subtasks()
    {
        return $this->hasMany(Subtask::class);
    }

}

