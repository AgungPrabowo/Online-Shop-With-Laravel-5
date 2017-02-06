<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'name' => 'Coba Kategori',
        	'created_at' => date('Y:m:d H:i:s'),
        ]);
    }
}
