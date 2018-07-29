<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowing_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('borrower_id');                     
            $table->integer('book_id');                     
            $table->date('borrowing_date');                     
            $table->integer('borrowing_period');                     
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
        Schema::dropIfExists('borrowing_details');
    }
}
