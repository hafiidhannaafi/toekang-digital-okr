<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detailinvoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'detailinvoices';
    protected $guarded = ['id'];

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }


    public function product(){
        return $this->belongsTo(Product::class);

    }
}
