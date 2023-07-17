<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createtableregisters extends Migration
{
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('Subscription', 100);
            $table->integer('Price');
            $table->date('Payment_date');
            $table->string('Detail', 500);
            $table->string('Url');
            $table->timestamps();
        });
    }

   public function down()
{
    Schema::dropIfExists('registers');
}
}
