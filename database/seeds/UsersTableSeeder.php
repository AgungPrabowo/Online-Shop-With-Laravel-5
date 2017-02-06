<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Agung Prabowo',
        	'email' => 'agungprabowo110696@yahoo.com',
        	'password' => bcrypt('agungprabowo'),
        	'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
