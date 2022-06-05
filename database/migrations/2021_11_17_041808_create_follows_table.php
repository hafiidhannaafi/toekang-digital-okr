<?php

use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(User::class); //employee

            $table->dateTime('datetime', $precision = 0);
            $table->text('result');
            $table->enum('media', ['WhatsApp', 'Email', 'Phone','Visit']);
            $table->date('next_followup');

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
        Schema::dropIfExists('follows');
    }
}
