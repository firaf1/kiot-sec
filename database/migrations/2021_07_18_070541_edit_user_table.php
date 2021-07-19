<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->string('campos')->nullable();
           $table->string('department')->nullable();
           $table->string('batch')->nullable();
           $table->text('phoneNumber')->nullable();
           $table->text('scanned_kebele_id')->nullable();
           $table->text('qr')->nullable();
           
           $table->string('role')->nullable();
           $table->string('status')->nullable();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
