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
            [
                'name' => 'David C',
                'email' => 'randomdada@gmail.com',
                'password' => bcrypt('nianiania'),
            ],
            [
                'name' => 'Gertrude',
                'email' => 'geger@gmail.com',
                'password' => bcrypt('nianiania'),
            ]
        ]);
    }
}
