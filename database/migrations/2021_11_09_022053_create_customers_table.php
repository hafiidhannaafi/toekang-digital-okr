<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (!Schema::hasTable('users')) {
            Schema::create('customers', function (Blueprint $table) {
                $table->increments('id');
                // $table->integer('user_id')->unsigned();
                // $table->foreign('user_id')->references('id')->on('users');
                $table->foreignIdFor(User::class); //employee

                // $table->string('coba-del'); //mada- ini apa?
                $table->string('name');
                $table->text('address');
                $table->string('phone');
                $table->string('email', 250)->unique();
                $table->string('fax');
                $table->string('website');
                $table->enum('status', ['cold', 'warm', 'hot', 'expired']);
                // $table->string('pic');
                // $table->string('contact');
                $table->text('note');
                $table->enum('approval',['approved','pending','declined']);
                $table->boolean('is_order');

                $table->softDeletes();
                $table->timestamps();
            });
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
