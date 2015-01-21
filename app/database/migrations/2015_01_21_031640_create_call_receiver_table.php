<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallReceiverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('call_receiver', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('call_id')->unsigned()->index();
			$table->foreign('call_id')->references('id')->on('calls')->onDelete('cascade');
			$table->integer('receiver_id')->unsigned()->index();
			$table->foreign('receiver_id')->references('id')->on('receivers')->onDelete('cascade');
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
		Schema::drop('call_receiver');
	}

}
