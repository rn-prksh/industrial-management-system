<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliTabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deli_tab', function (Blueprint $table) {
            $table->string('diagram', 30); // Diagram number
            $table->string('r_name', 30); // Receiver name
            $table->string('r_contact', 30); // Receiver contact
            $table->string('company', 30); // Company name
            $table->string('deli_date', 30); // Delivery date (stored as string)
            $table->string('deli_time', 30); // Delivery time (stored as string)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deli_tab');
    }
}
