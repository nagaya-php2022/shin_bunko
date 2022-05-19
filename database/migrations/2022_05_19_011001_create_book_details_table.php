<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_details', function (Blueprint $table) {
            $table->integer('isbn')->length(13)->unsigned()->index();
            $table->string('name', 300); //100文字
            //$table->foreignId('group_code')->constrained('groups');
            $table->integer('group_code')->length(1)->unsigned()->index();
            $table->string('author', 300); //100文字
            $table->string('publisher', 300); //100文字
            $table->date('published_at');

            $table->foreign('group_code')->references('code')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_details');
    }
}
