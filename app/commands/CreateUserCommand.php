<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CreateUserCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'app:create-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a user for application';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{

		$user = User::create([
			'name' => $this->argument('name'),
			'email' => $this->argument('email'),
			'password' => Hash::make($this->argument('password'))
		]);

		$this->info("{$user->name} has been created");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('name', InputArgument::REQUIRED, 'First and last name of new user.'),
			array('email', InputArgument::REQUIRED, 'Email address of new user'),
			array('password', InputArgument::REQUIRED, 'Password of new user'),
		);
	}

}
