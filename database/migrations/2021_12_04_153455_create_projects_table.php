<?php

use App\Models\User;
use App\Models\Customer;
use App\Models\employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class);
            $table->foreignId('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_project');
            $table->text('description');
            $table->date('first_date');
            $table->date('last_date');
            $table->string('total_kru');
            $table->string('status');
            $table->string('total_biaya');
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
        Schema::dropIfExists('projects');
    }
}
