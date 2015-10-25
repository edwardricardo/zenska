<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run(){

        DB::table('users')->truncate();

		factory(App\User::class)->create([
			'name'	=>	'Edward	Velasquez',
			'email'	=>	'edwardv2@gmail.com',
			'password'	=>	bcrypt('edward28'),
            'role'  => 'admin'
			]);

        factory(App\User::class, 14)->create();
	}
}