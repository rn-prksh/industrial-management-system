<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_tab', function (Blueprint $table) {
            $table->string('dia_no', 20)->primary(); // Primary key
            $table->string('u_name', 20); // User name
            $table->string('material', 255); // Material type
            $table->string('contact', 20); // Contact number
            $table->string('given', 20); // Given date (stored as string)
            $table->string('company', 155); // Company name
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_tab');
    }
}
