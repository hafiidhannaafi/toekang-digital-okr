<?php

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailinvoices', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Invoice::class);
            // $table->foreignIdFor(Product::class); //product

            $table->integer('qty');
            $table->float('price');
            $table->float('discount');
            $table->float('subtotal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailinvoices');
    }
}
