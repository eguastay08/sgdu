<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $user = User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@ueb.edu.ec',
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user->assignRole('Administrator');

        $user = User::create([
            'id' => 2,
            'name' => 'guest',
            'email' => 'guest@ueb.edu.ec',
            'password' => Hash::make('guest'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $user->assignRole('guest');
    }
}
