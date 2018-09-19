<?php

use Illuminate\Database\Seeder;
use App\ReadingLog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        ReadingLog::create([
            'book_title' => 'Buddha at Bedtime',
            'book_author' => 'Dharmachari Nagaraja',
            'read_date' => '2018-09-01'
        ]);

        ReadingLog::create([
            'book_title' => 'Where the Wild Things Are',
            'book_author' => 'Maurice Sendak',
            'read_date' => '2018-09-01'
        ]);

        ReadingLog::create([
            'book_title' => 'The Big Book of Paw Patrol',
            'book_author' => 'Golden Books',
            'read_date' => '2018-08-31'
        ]);

    }
}
