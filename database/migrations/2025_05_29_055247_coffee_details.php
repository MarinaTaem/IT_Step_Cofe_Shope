<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coffee_details', function (Blueprint $table) {
            $table->id();
            $table->string('short_description', 300);
            $table->string('origin', 45);
            $table->string('brewing_method', 200);
            $table->string('roast_level', 150);
            $table->string('price');
            $table->timestamps();
            
            $table->index(['id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffee_details');
    }
};