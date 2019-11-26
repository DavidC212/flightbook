<?php

use Illuminate\Database\Seeder;

class GlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gliders')->insert([
            [
                'type' => 'G 103',
                'registration' => 'F-CFHQ'
            ],
            [
                'type' => 'G 103',
                'registration' => 'F-CFKP'
            ],
            [
                'type' => 'ASK 21',
                'registration' => 'F-CLOL'
            ],
            [
                'type' => 'Discus',
                'registration' => 'F-CGGQ'
            ]
        ]);
    }
}
