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
        factory(\App\User::class)->create([
            'email' => 'user1@test.com',
            'password' => bcrypt('1234'),
        ]);
        factory(\App\User::class)->create([
            'email' => 'user2@test.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
