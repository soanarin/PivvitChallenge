<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table offerings
        Schema::create('offerings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('offering',60);
            $table->decimal('price', 7, 2);
            $table->timestamps();
        });

        //seed some values
        DB::table('offerings')->insert([
            ['offering' => 'tshirt','price'=>25.80],
            ['offering' => 'trousers','price'=>30.00],
            ['offering' => 'coat','price'=>50.75],
            ['offering' => 'skirt','price'=>100.99],
            ['offering' => 'tshirt','price'=>12.35],

        ]);    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerings');
    }
}
