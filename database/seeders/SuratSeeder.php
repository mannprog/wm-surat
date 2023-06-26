<?php

namespace Database\Seeders;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratMasuk::factory(5)->create();
        SuratKeluar::factory(5)->create();
    }
}