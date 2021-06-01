<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->nullable();
            $table->foreignId('landlord_id')->nullable();
            $table->foreignId('tenant_id')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->string('feature');
            $table->text('description');
            $table->string('images')->nullable();
            $table->string('type');
            $table->string('location');
            $table->string('period_of_availability');
            $table->string('urgency');
            $table->boolean('isVerified')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
