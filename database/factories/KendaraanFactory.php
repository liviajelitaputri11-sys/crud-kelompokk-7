<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
protected $model = Kendaraan::class;
     public function definition(): array
    {
        return [
        'nomor_polisi' => strtoupper(fake()->unique()->bothify('?? #### ??')),
            'merek' => fake()->randomElement(['Toyota', 'Honda', 'Suzuki', 'Mitsubishi', 'Yamaha']),
            'tipe' => fake()->randomElement(['Avanza', 'Brio', 'Ertiga', 'Xpander', 'NMAX']),
            'kategori' => fake()->randomElement(['Mobil', 'Motor']),
            'tahun' => fake()->numberBetween(2015, 2026),
            'warna' => fake()->randomElement(['Hitam', 'Putih', 'Merah', 'Biru', 'Silver']),
            'keterangan' => null,
        ];
    }
}
