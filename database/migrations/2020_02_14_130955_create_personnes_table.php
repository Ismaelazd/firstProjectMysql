<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
            $table->char('nom',110);
            $table->char('prenom',80);;
            $table->integer('age');
            $table->timestamp('dateofbirth');
            $table->string('email', 100);
            $table->smallInteger('phonenumber');
            $table->boolean('inscris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes');
    }
}
