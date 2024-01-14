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
        Schema::table('users', function (Blueprint $table) {
            //agregamos una columana a user
            $table->string("username")->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //no se nos olvide poner nuestro rolback para regresar es como un control de versiones
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('username');
        });
    }
};
