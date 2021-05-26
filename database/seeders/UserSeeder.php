<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'fname'=> 'IMANISHIMWE',
            'lname'=> 'Honore',
            'email' => 'imanishimwehono@gmail.com',
            'password'=> Hash::make('password')
        ]);
    }
}
