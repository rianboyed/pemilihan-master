<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name' => 'sofyan_Ali',
            'email' => 'sofyan_Ali@menggandul.com',
            'role'  => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('12345678'),
        ]);
    }
}
