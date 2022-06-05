<?php

use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(User::class); //employee

            $table->string('nomor_ref');
            $table->dateTime('datetime', $precision = 0);
            $table->float('subtotal');
            $table->float('tax');
            $table->float('discount');
            $table->float('total');
            $table->date('jatuh_tempo');

            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
}
