<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('designation');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('category_name')->nullable();
            $table->string('image')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('managements');
    }
}
