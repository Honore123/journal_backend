<?php

namespace Database\Seeders;

use App\Models\Journal;
use App\Models\User;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journal::firstOrCreate([
            'title'=>'My Feelings Today',
            'note' => 'Am feeling Lucky today wi the help of this message :)',
            'user_id' => User::first()->id,
        ]);
    }
}
