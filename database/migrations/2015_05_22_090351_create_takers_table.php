<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('takers', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('login');
            $table->string('password', 60);
            $table->string('title');
            $table->string('lastname');
            $table->string('firstname');
			$table->string('gender'); // ? "gender":"female",
            $table->string('email')->unique();
            $table->string('picture');
            $table->string('address');
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
		Schema::table('takers', function(Blueprint $table)
		{
			Schema::drop('takers');
		});
	}

}
