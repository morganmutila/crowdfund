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
            $table->id()->from(100000);
            $table->string('title');
            $table->string('location');
            $table->text('description');
            $table->string('project_image');
            $table->integer('duration');
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->unsignedFloat('budget');
            $table->unsignedFloat('amount')->nullable()->default('0.00');
            $table->boolean('published')->default(false);
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
