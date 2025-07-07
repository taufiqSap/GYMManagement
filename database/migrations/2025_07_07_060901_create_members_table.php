<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('trainer_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('membership_type');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('trainer_id')->references('id')->on('trainers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
