<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kegiatas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatas>
 */
class KegiatanFactory extends Factory
{
    protected $model = Kegiatas::class; // Set the model correctly

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kegiatan' => $this->faker->sentence(3),
            'tanggal_kegiatan' => $this->faker->date(),
            'waktu_kegiatan' => $this->faker->time(),
            'tempat_kegiatan' => $this->faker->sentence(3),
            'status_kegiatan' => $this->faker->sentence(3),
            'deskripsi_kegiatan' => $this->faker->sentence(3),
        ];
    }
}
