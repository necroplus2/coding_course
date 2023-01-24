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
            'nama_kategori' => 'Programming'
        ]);
        \App\Models\Category::create([
            'nama_kategori' => 'Design UI/UX'
        ]);
        \App\Models\Category::create([
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
            'isi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'bab_id' => 1,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Penerapan Kode HTML',
            'sub_bab' => 2,
            'isi' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
            'bab_id' => 1,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Pengertian CSS',
            'sub_bab' => 1,
            'isi' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
            'bab_id' => 2,
        ]);
        \App\Models\KnowledgeContent::create([
            'judul' => 'Penerapan CSS',
            'sub_bab' => 2,
            'isi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'bab_id' => 2,
        ]);

        // \App\Models\User::factory(3)->create();
    }
}
