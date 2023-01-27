<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrKelas = [
            'Web Programming 1',
            'Web Programming 2',
            'Web Programming 3',
            'Programming Visual 1',
            'Programming Visual 2',
            'Web Design 1',
            'Web Design 2',
            'Cross Platform 1',
            'Cross Platform 2',
            'DBMS Relasional',
            'Database NoSQL'
        ];

        $arrKategori = [
            1674749723010,
            1674749662010,
            1674749468010
        ];

        return [
            'judul_kelas' => $arrKelas[mt_rand(0,9)],
            'kategori_id' => $arrKategori[mt_rand(0,2)],
            'deskripsi' => Arr::join ( fake()->paragraphs(5, false), '</p><p>' ),
            'menthor_id' => mt_rand(2,4)
        ];
    }
}
