<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_unit_kerja')->insert([
            ['name' => 'Biro Perencanaan, Keuangan, dan Umum'],
            ['name' => 'Biro Akademik, Kemahasiswaan, dan Kerja Sama'],
            ['name' => 'Fakultas Seni Pertunjukan'],
            ['name' => 'Fakultas Seni Rupa dan Desain'],
            ['name' => 'Fakultas Seni Media Rekam'],
            ['name' => 'Program Pascasarjana'],
            ['name' => 'Lembaga Penelitian dan Pengabdian Masyarakat'],
            ['name' => 'Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran'],
            ['name' => 'UPA Teknologi Informasi dan Komunikasi'],
            ['name' => 'UPA Galeri dan Koleksi Seni'],
            ['name' => 'UPA Bahasa'],
            ['name' => 'UPA Pertunjukan Seni'],
            ['name' => 'UPA Pengembangan Karir dan Kewirausahaan'],
            ['name' => 'UPA Layanan Uji Kompetensi'],
            ['name' => 'Satuan Pengawas Internal'],
        ]);
    }
}
