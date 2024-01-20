<?php

namespace Database\Seeders;

use App\Models\LinkApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LinkApp::create([
            'nama_client' => 'Wipro Malaysia',
            'nama_aplikasi' => 'Wipro Apps',
            'link_aplikasi' => 'https://play.google.com/store/apps/details?id=id.kreasiiman.wipromy',
            'username_aplikasi' => 'tester',
            'password_aplikasi' => 'asd'
        ]);

        LinkApp::create([
            'nama_client' => 'Wipro Malaysia',
            'nama_aplikasi' => 'Web Report Wipro Malaysia',
            'link_aplikasi' => 'https://wipromy.tuas.my.id/',
            'username_aplikasi' => 'report',
            'password_aplikasi' => 'viewer'
        ]);
    }
}
