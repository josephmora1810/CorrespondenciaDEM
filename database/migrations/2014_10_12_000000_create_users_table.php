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
            $table->id()->autoIncrement(); //interer (entero), Unsigned(sin signo), Increment(Incrementable)
            $table->string('name', 100); //varchar (por defecto 255)
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();// para verificar los registros, propiedad nullable porque puede estar vacio.
            $table->string('featured')->nullable();
            $table->string('password');
            $table->rememberToken(); // este metodo es varchar 100, es para almacenar un token y mantener la sesion iniciada
            $table->timestamps(); // es mas que todo para el: create at, update at
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
