<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('campos')->nullable();
            $table->string('department')->nullable();
            $table->string('batch')->nullable();
            $table->text('phoneNumber')->nullable();
            $table->text('scanned_kebele_id')->nullable();
            $table->text('qr')->nullable();
            $table->text('qr_data')->nullable();
            $table->string('shift_id')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            
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
        Schema::dropIfExists('users');
    }
}
