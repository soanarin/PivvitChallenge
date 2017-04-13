<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerName',100);
            //one to many relationship to offerings
            $table->integer('offeringId')->unsigned();
            $table->foreign('offeringId')->references('id')->on('offerings');
            $table->integer('quantity');           
            $table->timestamps();

        });

        //seed some values
        DB::table('purchases')->insert([
            ['customerName' => 'Helen','offeringId'=>1,'quantity'=>2],
            ['customerName' => 'Andrew','offeringId'=>3,'quantity'=>1],
            ['customerName' => 'William','offeringId'=>2,'quantity'=>3],
            ['customerName' => 'Mary','offeringId'=>1,'quantity'=>2],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
