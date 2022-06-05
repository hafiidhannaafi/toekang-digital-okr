<?php

namespace App\Models;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contacts';
    protected $guarded = ['id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
