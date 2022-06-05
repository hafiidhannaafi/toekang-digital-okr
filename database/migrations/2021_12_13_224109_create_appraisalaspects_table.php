<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppraisalaspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisalaspects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('positions_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('objectiveaspects_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('keyresults_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('target');
            $table->string('satuan');
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
        Schema::dropIfExists('appraisalaspects');
    }
}
