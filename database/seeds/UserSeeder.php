<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'password' => bcrypt('123456'),
            'role' => 'Admin',
            'created_at' => date('Y-m-d h:i:s'),
        ]);
    }
}
