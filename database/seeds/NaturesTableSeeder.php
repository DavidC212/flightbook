<?php

use Illuminate\Database\Seeder;

class NaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('natures')->insert([
            [
                'nature' => 'Local',
                'nature_code' => 'L'
            ],
            [
                'nature' => 'Campagne',
                'nature_code' => 'C'
            ]
        ]);
    }
}
