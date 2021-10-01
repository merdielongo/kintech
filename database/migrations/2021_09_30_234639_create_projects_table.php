<?php

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
            $table->unsignedBigInteger('edition_id');
            $table->string('team_name');
            $table->string('project_name');
            $table->string('manager');
            $table->string('activity');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('page')->nullable();
            $table->string('identity');
            $table->string('project');
            $table->string('status')->default(false);
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
