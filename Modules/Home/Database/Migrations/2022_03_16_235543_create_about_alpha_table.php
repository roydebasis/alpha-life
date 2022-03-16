<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutAlphaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_alpha', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image");
            $table->longText("description");
            $table->integer('created_by')->unsigned()->nullable();
            $table->string('created_by_name')->nullable();
            $table->string('created_by_alias')->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
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
        Schema::dropIfExists('about_alpha');
    }
}
