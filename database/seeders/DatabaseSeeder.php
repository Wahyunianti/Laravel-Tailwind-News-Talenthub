<?php

namespace Database\Seeders;
use App\Models\Role;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'nama' => 'Admin',
        ]);

        Role::create([
            'nama' => 'Penulis',
        ]);

        \App\Models\User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'Admin123',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);


    }
}
