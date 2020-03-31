<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('url');
            $table->unsignedBigInteger('item_type_id')->default(1);
            $table->text('blurb')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('source')->nullable();
            $table->string('primary_author')->nullable();
            $table->string('secondary_author')->nullable();
            $table->timestamps();

            $table->foreign('item_type_id')->references('id')->on('item_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
