<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Arr;
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
            'username' => fake()->userName(),
            'email' => 'necroplus2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'administrator',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'menthor1@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'menthor2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'menthor3@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'menthor',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'user1@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'user',
        ]);
        \App\Models\User::create([
            'nama_lengkap' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'user2@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 'user',
        ]);

        \App\Models\Category::create([
            'id' => 1674749723010,
            'nama_kategori' => 'Programming'
        ]);
        \App\Models\Category::create([
            'id' => 1674749662010,
            'nama_kategori' => 'Design UI/UX'
        ]);
        \App\Models\Category::create([
            'id' => 1674749468010,
            'nama_kategori' => 'Database'
        ]);

        \App\Models\Module::factory(10)->create();

        \App\Models\Chapter::create([
            'nama_bab' => 'HTML',
            'kelas_id' => 1
        ]);
        \App\Models\Chapter::create([
            'nama_bab' => 'CSS',
            'kelas_id' => 1
        ]);

        \App\Models\KnowledgeContent::create([
            'judul' => 'Pengertian HTML',
            'sub_bab' => 1,
            'isi' => '<p>' . Arr::join ( fake()->paragraphs(5, false), '</p><p>' ) . '</p>',
            'bab_id' => 1,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Penerapan Kode HTML',
            'sub_bab' => 2,
            'isi' => '<p>' . Arr::join ( fake()->paragraphs(5, false), '</p><p>' ) . '</p>',
            'bab_id' => 1,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Pengertian CSS',
            'sub_bab' => 1,
            'isi' => '<p>' . Arr::join ( fake()->paragraphs(5, false), '</p><p>' ) . '</p>',
            'bab_id' => 2,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Penerapan CSS',
            'sub_bab' => 2,
            'isi' => '<p>' . Arr::join ( fake()->paragraphs(5, false), '</p><p>' ) . '</p>',
            'bab_id' => 2,
        ]);

        \App\Models\Effort::create([
            'user_id' => 5,
            'kelas_id' => 1,
            'presentase' => 40,
        ]);
        \App\Models\Effort::create([
            'user_id' => 5,
            'kelas_id' => 2,
            'presentase' => 50,
        ]);
        \App\Models\Effort::create([
            'user_id' => 5,
            'kelas_id' => 3,
            'presentase' => 60,
        ]);
        \App\Models\Effort::create([
            'user_id' => 3,
            'kelas_id' => 4,
            'presentase' => 10,
        ]);
        // \App\Models\User::factory(3)->create();
    }
}
