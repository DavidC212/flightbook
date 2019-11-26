<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            [
                'date' => '2019-10-21',
                'double_control' => '00:11:00',
                'captain' => '',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '1',
                'board_function_id' => '1',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-10-24',
                'double_control' => '',
                'captain' => '00:04:00',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '1',
                'board_function_id' => '1',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-10-22',
                'double_control' => '',
                'captain' => '',
                'instructor' => '00:11:00',
                'user_id' => '2',
                'glider_id' => '2',
                'board_function_id' => '3',
                'nature_id' => '2',
            ]
        ]);
    }
}
