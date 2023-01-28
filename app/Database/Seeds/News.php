<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // Membuat data
        $news_data = [
            [
                'title'     => 'Selamat datang di CodeIgniter',
                'slug'      => 'codeigniter-intro',
                'content'   => 'Pengenalan CodeIgniter untuk pemula.'
            ],
            [
                'title'     => 'Hello World',
                'slug'      => 'hello-world',
                'content'   => 'Hello dunia, ini adalah contoh artikel.'
            ],
            [
                'title'     => 'Meetup komunitas CodeIgniter indonesia',
                'slug'      => 'codeigniter-meetup',
                'content'   => 'Seru sekali meetup perdana komunitas codeigniter.'
            ],
        ];

        foreach ($news_data as $data){
            // Insert semua data ke tabel
            $this->db->table('news')->insert($data);
        }
    }
}
