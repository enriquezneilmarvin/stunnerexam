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
            'name' => 'Validation 001',
            'email' => 'testvalidation@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
