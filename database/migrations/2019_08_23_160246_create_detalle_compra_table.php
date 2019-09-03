<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->Increments('id');
			$table->integer('compra_id')->unsigned();
			$table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade')->unique()->unsigned();
			$table->integer('categoria_id')->unsigned();
			$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->unique()->unsigned();
			$table->string('nombre',50);
			$table->integer('precio');
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
        Schema::dropIfExists('detalle_compra');
    }
}
