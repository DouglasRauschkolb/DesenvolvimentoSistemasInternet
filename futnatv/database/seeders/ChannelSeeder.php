<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            ['name' => 'ESPN Brasil'],
            ['name' => 'ESPN'],
            ['name' => 'ESPN 2'],
            ['name' => 'ESPN Extra'],
            ['name' => 'ESPN App'],
            ['name' => 'Fox Sports'],
            ['name' => 'Fox Sports 2'],
            ['name' => 'Sportv'],
            ['name' => 'Sportv 2'],
            ['name' => 'Sportv 3'],
            ['name' => 'BandSports'],
            ['name' => 'Premiere'],
            ['name' => 'TNT'],
            ['name' => 'Space'],
            ['name' => 'Globo'],
            ['name' => 'SBT'],
            ['name' => 'BAND'],
            ['name' => 'DANZ'],
            ['name' => 'Onefootball'],
            ['name' => 'Facebook Watch'],
            ['name' => 'YouTube'],
        ]);
    }
}
