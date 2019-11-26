<?php

use Illuminate\Database\Seeder;

class Board_functionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_functions')->insert([
            [
                'board_function' => 'Élève pilote',
                'board_function_code' => 'EP'
            ],
            [
                'board_function' => 'Pilote solo',
                'board_function_code' => 'PS'
            ],
            [
                'board_function' => 'Formateur instructeur',
                'board_function_code' => 'FI'
            ]
        ]);
    }
}
