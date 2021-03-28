<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJefeDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_departamentos', function (Blueprint $table) {
            
            $table->string('Id',11)->primary();
            $table->string('PrimerNombre',15);
            $table->string('SegundoNombre',15);
            $table->string('PrimerApellido',15);
            $table->string('SegundoApellido',15);
            $table->string('Foto');
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
        Schema::dropIfExists('jefe_departamentos');
    }
}
