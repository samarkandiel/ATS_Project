<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('airlines', function (Blueprint $table) {
            $table->string('airline_code',2)->primary();
            $table->string('airline_name',255)->nullable();
            $table->tinyInteger('airline_active')->DEFAULT(1);
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airline');
    }
};
