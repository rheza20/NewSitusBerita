<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
     protected $model = Berita::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "judul" => $this->faker->sentence(5),
            "isi" => $this->faker->text(500),
            "kategori_id" => \App\Models\kategori::get("id")->random(),
            "user_id" => \App\Models\User::get("id")->first()
        ];
    }
}
