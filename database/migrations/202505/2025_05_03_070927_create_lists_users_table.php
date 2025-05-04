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
        Schema::create('lists_users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('email')->unique();
            $table->string('contact_number', 15);
            $table->date('date_of_birth');
            $table->string('address_line1', 250);
            $table->string('address_line2', 250);
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('state');
            $table->unsignedBigInteger('city');
            $table->string('pin_code', 250);
            $table->string('pan')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('shop')->nullable();
            $table->string('profile_picture')->nullable();
            $table->unsignedBigInteger('status_id')->default(1);
            $table->enum('role', [ 'admin','distributed', 'retail','user' ]);

            $table->timestamps();

            $table->foreign('state')->references('id')->on('states')->onDelete('no action');
            $table->foreign('country')->references('id')->on('countries')->onDelete('no action');
            $table->foreign('city')->references('id')->on('cities')->onDelete('no action');
            $table->foreign('status_id')->references('id')->on('status_type')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('lists_users');
    }
};
