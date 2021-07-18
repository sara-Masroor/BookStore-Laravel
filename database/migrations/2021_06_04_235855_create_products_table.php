<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('author_id')->constrained()->ondelete('cascade');
            $table->string('brand');
            $table->longText('body');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->string('image');
            $table->string('sampleFile');
            $table->string('originalFile');
            $table->integer('cat');
            $table->text('comment')->nullable();
//            $table->enum('special',['0','1']);
            $table->string('bestSeller')->default('0');
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
        Schema::dropIfExists('products');
    }
}
