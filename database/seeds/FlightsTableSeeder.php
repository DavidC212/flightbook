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
                'date' => '2019-02-21',
                'double_control' => '00:11:00',
                'captain' => '',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '1',
                'board_function_id' => '1',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-05-24',
                'double_control' => '',
                'captain' => '00:04:00',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '1',
                'board_function_id' => '1',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-06-07',
                'double_control' => '',
                'captain' => '01:05:45',
                'instructor' => '',
                'user_id' => '2',
                'glider_id' => '1',
                'board_function_id' => '2',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-08-02',
                'double_control' => '',
                'captain' => '',
                'instructor' => '00:16:00',
                'user_id' => '1',
                'glider_id' => '3',
                'board_function_id' => '3',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-09-10',
                'double_control' => '',
                'captain' => '00:47:00',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '2',
                'board_function_id' => '2',
                'nature_id' => '2',
            ],
            [
                'date' => '2019-09-22',
                'double_control' => '',
                'captain' => '',
                'instructor' => '00:11:00',
                'user_id' => '2',
                'glider_id' => '2',
                'board_function_id' => '3',
                'nature_id' => '2',
            ],
            [
                'date' => '2019-09-30',
                'double_control' => '00:36:00',
                'captain' => '',
                'instructor' => '',
                'user_id' => '2',
                'glider_id' => '1',
                'board_function_id' => '1',
                'nature_id' => '1',
            ],
            [
                'date' => '2019-10-22',
                'double_control' => '',
                'captain' => '00:37:25',
                'instructor' => '',
                'user_id' => '1',
                'glider_id' => '4',
                'board_function_id' => '2',
                'nature_id' => '2',
            ]
        ]);
    }
}
