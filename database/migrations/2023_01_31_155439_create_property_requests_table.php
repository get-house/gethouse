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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            $table->foreignId('landlord_id');
            $table->foreignId('agent_id');
            $table->foreignId('property_id');
            $table->enum('request_type', ['maintenance', 'rent increase', 'rent renewal', 'other'])->default('maintenance');
            $table->string('request_details');
            $table->enum('status', ['pending', 'approved', 'rejected', 'in progress', 'done'])->default('pending');
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
        Schema::dropIfExists('requests');
    }
};
