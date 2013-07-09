<?php

use App\Models\User;

class UserTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		User::create(array(
			'vendor' 	=> 'google',
			'user_id'	=> '106293321368143321434'
 		));
	}
}