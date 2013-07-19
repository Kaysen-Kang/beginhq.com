<?php

use App\Models\User;

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		User::create(array(
			'vendor' 	=> 'google',
			'user_id'	=> 'your id'
 		));
	}
}