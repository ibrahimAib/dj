<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->text('description_ar')->nullable();
            $table->string('img_path_1')->nullable();
            $table->string('img_path_2')->nullable();
            $table->string('img_path_3')->nullable();
            $table->string('img_path_4')->nullable();
            $table->string('img_path_5')->nullable();
            $table->string('img_path_6')->nullable();
            $table->string('img_path_7')->nullable();
            $table->string('img_path_8')->nullable();
            $table->string('img_path_9')->nullable();
            $table->string('img_path_10')->nullable();
            $table->string('img_path_11')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
