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
            $table->string('name_en');
            $table->string('name_fr')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_fr')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_fr')->nullable();
            $table->string('address_ar')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('statu');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
