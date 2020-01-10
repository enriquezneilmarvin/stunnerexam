<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist_data = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'id' => 2,
                'name' => 'Jane Doe',
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'name' => 'Foo Bar',
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
        ];
        foreach($artist_data as $fd)
        {
            DB::table('artists')->insert($fd);
        }
        // exit;
    }
}
