<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//Comment out this line to seed the database with fake users
		//If commented out, use 'php artisan db:seed'
		$this->call('UserTableSeeder');
	}

}
