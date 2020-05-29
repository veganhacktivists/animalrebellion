<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageFormInputPivotTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_form_input_pivot_table', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('page_id');
            $table->unsignedBigInteger('page_form_input_id');

            $table->foreign('page_id')->references('id')->on('pages');
            $table->foreign('page_form_input_id')->references('id')->on('page_form_inputs');

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
        Schema::dropIfExists('page_form_input_pivot_table');
    }
}
