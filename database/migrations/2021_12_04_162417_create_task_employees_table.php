<?php

use App\Models\User;
use App\Models\Bundle;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class);
            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(Bundle::class);
            $table->foreignIdFor(User::class); //employee

            $table->string('status');

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
        Schema::dropIfExists('task_employees');
    }
}
