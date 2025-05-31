<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->unsignedBigInteger('detail_id')->nullable()->unique();
            $table->string('url_image', 100)->nullable();
            $table->timestamps();
            
            $table->foreign('detail_id')->references('id')->on('coffees')->onDelete('cascade');
            $table->index(['id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffees');
    }
};