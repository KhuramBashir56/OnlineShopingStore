<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at', 6)->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 255)->nullable();
            $table->string('login_otp')->nullable();
            $table->string('login_otp_token')->nullable();
            $table->timestamp('login_otp_expired_at', 6)->nullable();
            $table->rememberToken();
            $table->timestamps(6);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at', 6)->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('subject', 100);
            $table->unsignedBigInteger('ref_id')->nullable();
            $table->string('type', 50);
            $table->string('description', 255)->nullable();
            $table->string('ip_address', 45);
            $table->text('user_agent');
            $table->timestamp('created_at', 6);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
