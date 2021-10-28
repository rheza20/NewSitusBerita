<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        // \DB::table("tblkategori")->truncate();
        \App\Models\kategori::truncate();
        \App\Models\kategori::insert([
            ["nama_kategori" => "News"],
            ["nama_kategori" => "Tren"],
            ["nama_kategori" => "Health"],
            ["nama_kategori" => "Food"],
            ["nama_kategori" => "Edukasi"],
            ]);
    }
}
