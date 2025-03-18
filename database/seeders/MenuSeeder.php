<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu; // Pastikan untuk mengimport model Menu

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan menu utama
        Menu::create([
            'name' => 'Dashboard',
            'url' => 'dashboard',
            'icon' => 'fas fa-fire',
            'parent_code' => null, // Menu utama (parent_code null)
            'sequence' => 1,
            'status' => 'active',
            'code' => 'dashboard_code' // Pastikan 'code' unik
        ]);

        // Menu Referensi
        Menu::create([
            'name' => 'Referensi',
            'url' => 'referensi',
            'icon' => 'fas fa-columns',
            'parent_code' => null,
            'sequence' => 2,
            'status' => 'active',
            'code' => 'referensi_code' // Pastikan 'code' unik
        ]);

        // Menu Ticket
        Menu::create([
            'name' => 'Ticket',
            'url' => 'ticket',
            'icon' => 'fas fa-ticket',
            'parent_code' => null,
            'sequence' => 3,
            'status' => 'active',
            'code' => 'ticket_code' // Pastikan 'code' unik
        ]);

        // Menu Laporan
        Menu::create([
            'name' => 'Laporan',
            'url' => 'laporan',
            'icon' => 'fas fa-file',
            'parent_code' => null,
            'sequence' => 4,
            'status' => 'active',
            'code' => 'laporan_code' // Pastikan 'code' unik
        ]);

        // Menu Setting
        Menu::create([
            'name' => 'Setting',
            'url' => 'setting',
            'icon' => 'fas fa-cogs',
            'parent_code' => null,
            'sequence' => 5,
            'status' => 'active',
            'code' => 'setting_code' // Pastikan 'code' unik
        ]);
    }
}
