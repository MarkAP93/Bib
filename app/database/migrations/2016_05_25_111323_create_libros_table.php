<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('Nombre');
			$table->integer('user_id')->unisgned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('autor_id')->unsigned();
			$table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
			$table->String('tag');
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
		Schema::drop('libros');
	}

}
