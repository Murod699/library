<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name')->default(NULL);
            $table->foreignId('cat_id')->constrained('bookscategory')
                ->onUpdate('cascade')
                ->onDelete('cascade'); 
            $table->foreignId('author_id')->constrained('authors')
                ->onUpdate('cascade')
                ->onDelete('cascade');               
            $table->string('ISBN_number')->default(NULL);
            $table->string('book_img');
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
        Schema::dropIfExists('books');
    }
}
