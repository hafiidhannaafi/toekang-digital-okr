<?php

namespace App\Models;

use App\Models\User;
use App\Models\Detailinvoice;
use App\Models\Invoice_detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'invoices';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function invoice_detail(){
        return $this->hasMany(Detailinvoice::class);
    }
}
