<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coffee_id');
            $table->string('content', 100);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('coffee_id')->references('id')->on('coffees')->onDelete('cascade');
            $table->index(['id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
