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
            $table->string('slug')->nullable();
            $table->string('location');
            $table->text('description');
            $table->string('image');
            $table->unsignedInteger('duration');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('budget');
            $table->unsignedInteger('amount')->default(0);
            $table->boolean('published')->default(false);
            $table->unsignedInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
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
