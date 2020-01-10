<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs_data = [
            [
            'title' => 'A Foo Bar Title 01',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '1',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'B Foo Bar Title 02',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '1',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'C Foo Bar Title 03',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '1',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'D Foo Bar Title 04',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '2',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'E Foo Bar Title 05',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '2',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'F Foo Bar Title 06',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '2',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'G Foo Bar Title 07',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '3',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'H Foo Bar Title 08',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '3',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'I Foo Bar Title 09',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '3',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'J Foo Bar Title 10',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '3',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
            [
            'title' => 'K Foo Bar Title 11',
            'lyrics' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'artist_id' => '3',
            'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ],
        ];
        foreach($songs_data as $sd)
        {
            DB::table('songs')->insert($sd);
        }
    }
}
