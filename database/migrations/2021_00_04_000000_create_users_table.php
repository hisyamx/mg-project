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
            $table->string('code');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', [1, 2, 3]);

            $table->string('telephone');
            $table->string('address');
            $table->string('instansi')->nullable();
            $table->unsignedBigInteger('division_id')->nullable();

            $table->string('cover_image')->nullable();

            $table->dateTime('start')->nullable();
            $table->dateTime('finish')->nullable();
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
