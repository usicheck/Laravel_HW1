<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * php artisan migrate
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 35);
            $table->string('surname', 50);
            $table->date('birthdate');
            $table->string('email')->unique();
            $table->string('phone', 15)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * php artisan migrate:rollback
     * php artisan migrate:reset
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
