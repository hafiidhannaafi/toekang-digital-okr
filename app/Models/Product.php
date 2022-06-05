<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'bundle_id',
        'name',
        'price',
        'description',
    ];

    public function bundles()
    {
        return $this->belongsTo(Bundle::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
