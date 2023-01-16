<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'necroplus2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'administrator',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'menthor1@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'menthor2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'menthor3@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'user1@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'user',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'email' => 'user2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'user',
        ]);

        \App\Models\Category::create([
            'nama_kategori' => 'Programming'
        ]);
        \App\Models\Category::create([
            'nama_kategori' => 'Design UI/UX'
        ]);
        \App\Models\Category::create([
            'nama_kategori' => 'Database'
        ]);

        \App\Models\Module::factory(10)->create();

        // \App\Models\User::factory(3)->create();
    }
}
