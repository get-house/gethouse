<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->foreignId('property_id')->nullable();
            $table->foreignId('tenant_id')->nullable();
            $table->text('address');
            $table->integer('phone_number');
            $table->string('email');
            $table->boolean('isActive')->default(false);
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
