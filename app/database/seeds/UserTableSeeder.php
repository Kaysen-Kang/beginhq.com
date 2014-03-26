<?php

use App\Models\User;

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		User::create(array(
			'vendor' 	=> 'google',
			'user_id'	=> '105846217830917135862'
 		));

		User::create(array(
			'vendor' 	=> 'github',
			'user_id'	=> '6970915'
 		));
	}
}
