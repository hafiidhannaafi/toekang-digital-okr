<?php

namespace App\Models;

use App\Models\User;
use App\Models\Follow;
use App\Models\Contact;
use App\Models\Invoice;
use App\Models\Follow_up;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';
    protected $guarded = ['id'];


    //relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }

    public function follow()
    {
        return $this->hasMany(Follow::class);
    }
}
