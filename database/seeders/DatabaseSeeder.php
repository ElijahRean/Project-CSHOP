<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
            'isAdmin' => true,
        ]);

        $this->call(
            CandiesSeeder::class,
        );

    }
}
