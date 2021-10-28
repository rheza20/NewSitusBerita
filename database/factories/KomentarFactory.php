<?php

namespace Database\Factories;

use App\Models\Komentar;
use Illuminate\Database\Eloquent\Factories\Factory;

class KomentarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
     protected $model = Komentar::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => \App\Models\User::get("id")->first(),
            "isi_komentar" => $this->faker->sentence(10),
            "berita_id" => \App\Models\Berita::get("id")->random()
        ];
    }
}
