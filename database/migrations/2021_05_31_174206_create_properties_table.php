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
            $table->foreignId('landlord_id')->nullable()->constrained();
            $table->foreignId('current_tenant_id')->nullable()->constrained('tenants')->onDelete('set null');
            $table->string('name');
            $table->integer('price');
            $table->string('size');
            $table->enum('furnishing', ['furnished', 'semi-furnished', 'unfurnished'])->default('unfurnished');
            $table->enum('status', ['vacant', 'rented', 'maintenance'])->default('vacant');
            $table->enum('class', ['premium', 'platinum', 'gold', 'regular'])->default('regular');
            $table->text('description');
            $table->string('rooms');
            $table->string('bathrooms');
            $table->string('images')->nullable();
            $table->string('type');
            $table->string('address');
            $table->date('lease_start_date')->nullable();
            $table->date('lease_end_date')->nullable();
            $table->boolean('parking')->default(false);
            $table->boolean('isVerified')->default(false);
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
