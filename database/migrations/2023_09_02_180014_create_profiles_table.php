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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('job_complete')->nullable();
            $table->string('experiences')->nullable();
            $table->string('verified_documents')->nullable();
            $table->string('location')->nullable();
            $table->string('cpr_certificate')->nullable();
            $table->string('driving_licence')->nullable();
            $table->string('star_ratting')->nullable();
            $table->string('referable')->nullable();
            $table->string('work_status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
