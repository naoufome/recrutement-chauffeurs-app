php
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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable()->index();
            $table->unsignedBigInteger('interviewer_id')->nullable();
            $table->dateTime('interview_date')->nullable();
            $table->string('type')->nullable();
            $table->text('notes')->nullable();
            $table->string('status')->nullable();
            $table->text('result')->nullable();
            $table->text('feedback')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('scheduler_id')->nullable()->index();

            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('set null');
           $table->foreign('scheduler_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('interviewer_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};