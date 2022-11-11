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
            $table->string('name', 30)->nullable();
            $table->string('apellido_p', 30)->nullable();
            $table->string('apellido_m', 30)->nullable();
            $table->string('direction')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('number_phone', 10)->nullable();
            $table->float('salario', 21, 2)->nullable();
            $table->date('fecha_contratacion')->nullable();
            $table->float('saldo', 21, 8)->nullable();
            $table->unsignedBigInteger('id_type_user');
            $table->unsignedBigInteger('id_state')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_type_user')->references('id')->on('type__employees');
            $table->foreign('id_state')->references('id')->on('states');
            $table->foreign('id_status')->references('id')->on('statuses');
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
