<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Komentar::factory()->count(2000)->create();
    }
}
