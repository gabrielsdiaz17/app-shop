<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
				'name'=>'Prueba Gabriel',
				'email'=>'pruebagabriel@prueba.com',
				'password'=>bcrypt('123456')

        	]);
    }
}
