<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $userOne = User::create([
            'firstName' => 'Dzaki',
            'lastName' => 'Ahmad',
            'email' => 'dzakiaf19@gmail.com',
            'phone' => '82331038689',
            'address' => 'Banyuwangi',
            'birthdate' => '2002-06-19',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty12345'), // password
            'remember_token' => Str::random(10),
        ]);
        
        $userTwo = User::create([
            'firstName' => 'Surya',
            'lastName' => 'Ahmad',
            'email' => 'bebek@gmail.com',
            'phone' => '82331033251',
            'address' => 'Banyuwangi',
            'birthdate' => '2002-06-19',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty12345'), // password
            'remember_token' => Str::random(10),
        ]);

        Category::create(['name' => 'SUV']);
        Category::create(['name' => 'MPV']);
        Category::create(['name' => 'Sedan']);
        Category::create(['name' => 'Hatchback']);

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'User']);

        $userOne->assignRole('Admin');
        $userTwo->assignRole('User');
    }
}
