<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppraisaleventdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisaleventdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appraisalevents_id')->constrained('appraisalevents')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('projects_id')->constrained('projects')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('apprasialaspects_id')->constrained('appraisalaspects')->onUpdate('cascade')->onDelete('cascade');
            //$table->date('first_date', $precision = 0);
            //$table->date('last_date', $precision = 0);
            $table->string('target');
            $table->string('score');
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
        Schema::dropIfExists('appraisaleventdetails');
    }
}
