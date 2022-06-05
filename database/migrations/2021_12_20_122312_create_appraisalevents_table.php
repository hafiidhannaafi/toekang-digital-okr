<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppraisaleventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisalevents', function (Blueprint $table) {
            $table->id();
            $table->date('periodeevent');
            $table->dateTime('datetime', $precision = 0);
            $table->foreignId('employees_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->string('total_score');
            //$table->string('no_referensi');
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
        Schema::dropIfExists('appraisalevents');
    }
}
