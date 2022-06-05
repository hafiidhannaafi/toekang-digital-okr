<?php

namespace App\Models;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $guarded = ['id'];

    public function customer(){
        return $this->hasMany(Customer::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function employees()
    {
        return $this->belongsTo(employee::class,'employee_id');
    }
}
