<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\User;





// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'nama' => 'Admin',
        ]);

        Role::create([
            'nama' => 'Penulis',
        ]);

        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'Admin123',
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);

        User::create([
            'nama' => 'Penulis',
            'email' => 'penulis@gmail.com',
            'username' => 'Penulis123',
            'password' => bcrypt('penulis'),
            'role_id' => 2
        ]);

        Kategori::create([
            'nama' => 'Politik',
        ]);

        Artikel::create([
            'id' => 2,
            'judul' => 'Kaesang: Wajar Jika Konstituen PSI Pilih Ahok dan Anies di Jakarta',
            'konten' => '<p><strong>Jakarta, Awani News</strong> -- Ketua Umum PSI Kaesang Pangarep menilai wajar jika konstituen partainya memilih Anies Baswedan dan Basuki Tjahaja Purnama (Ahok) di Pilgub Jakarta 2024. Pernyataan Kaesang itu merespons temuan survei Indikator Politik Indonesia. Sebagian besar pemilih PSI cenderung akan memilih Anies dan Ahok di Pilgub Jakarta.</p><p><br></p><p>"Pak Anies dan Pak Ahok sudah berbuat sangat banyak untuk DKI Jakarta di mana nanti ke depannya menjadi DKJ. Beliau berdua sangat pantas kalau konstituen PSI memilih Pak Anies dan Pak Ahok," kata Kaesang dalam jumpa pers di Kantor DPP PSI, Jakarta, Kamis (25/7). Kaesang tak masalah dengan preferensi para pemilih PSI itu. Dia menganggap hasil survei itu sebagai bentuk dinamika menjelang pilkada. "Ya, enggak masalah, ini kan dinamika untuk di pilkada, khususnya di DKI," ujarnya. Sebelumnya, Indikator Politik Indonesia mengungkap tingkat keterpilihan calon-calon gubernur DKI Jakarta. Anies Baswedan memuncaki daftar itu dengan elektabilitas 39,7 persen.</p><p><br></p>',
            'foto' => '1721906747_kaesang.jpeg',
            'kategoris_id' => 1,
            'users_id' => 2,
            'created_at' => '2024-07-24 11:37:20',
            'updated_at' => '2024-07-25 04:25:47',
        ]);


    }
}
