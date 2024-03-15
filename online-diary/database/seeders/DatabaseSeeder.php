<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DiaryMessage;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed one user. First I wanted to seed a bunch of messages as well (the outcommented 
     * data below). I then discovered the factory method and chose to go with that 
     * instead.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'VarbiUser',
            'email' => 'varbi@mail.com',
            'password' => Hash::make('Varbi123'),
        ]);
        DiaryMessage::factory(4)->create();
        // $diaryMessages = [
        //     [
        //         'title' => 'My title 1',
        //         'text' => 'A bunch of texts 1',
        //         'date_created' => Carbon::yesterday()->setHour(15)->setMinute(46),
        //         'is_deleted' => false,
        //     ],
        //     [
        //         'title' => 'My title 2',
        //         'text' => 'A bunch of texts 2',
        //         'date_created' => Carbon::now()->subDays(3)->setHour(11)->setMinute(54),
        //         'is_deleted' => false,
        //     ],
        //     [
        //         'title' => 'My title 3',
        //         'text' => 'A bunch of texts 3',
        //         'date_created' => Carbon::now()->subDays(7)->setHour(14)->setMinute(37),
        //         'is_deleted' => false,
        //     ],
        //     [
        //         'title' => 'My title 4',
        //         'text' => 'A bunch of texts 4',
        //         'date_created' => Carbon::now()->subDays(7)->setHour(17)->setMinute(35),
        //         'is_deleted' => false,
        //     ]
        // ];

    }
}
