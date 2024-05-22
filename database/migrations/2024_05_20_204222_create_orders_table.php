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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('school_choise');
            $table->string('year_of_study');
            $table->string('name');
            $table->string('gender');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('from_school');
            $table->string('parent_name');
            $table->string('phone_number');
            $table->text('address');
            $table->integer('qty');
            $table->bigInteger('amount');
            $table->enum('status', ['unpaid', 'paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
