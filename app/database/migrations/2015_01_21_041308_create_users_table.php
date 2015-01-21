<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 */
	public function up() {
		// Creates the users table
		Schema::create('users', function ($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')
				->unique();
			$table->string('password');
			$table->string('remember_token')
				->nullable();
			$table->timestamps();
		});

		// Creates password reminders table
		Schema::create('password_reminders', function ($table) {
			$table->string('email');
			$table->string('token');
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down() {
		Schema::drop('password_reminders');
		Schema::drop('users');
	}

}
