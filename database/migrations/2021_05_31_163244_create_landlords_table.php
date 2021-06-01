<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('tenant_id')->nullable();
            $table->string('name');
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
        Schema::dropIfExists('landlords');
    }
}
