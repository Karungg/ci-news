<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo view('about');
    }

    public function contact()
    {
        $data['name'] = "Miftah Fadilah";
        echo view('contact', $data);
    }

    public function faqs()
    {
        // Mengirim data untuk dikirim ke view
        $data['data_faqs'] = [
            [
                'question' => 'Apa itu CodeIgniter?',
                'answer' => 'CodeIgniter adalah framework untuk membuat website'
            ],

            [
                'question' => 'Siapa yang membuat CodeIgniter?',
                'answer' => 'CodeIgniter awalnya dibuat oleh EllisLab'
            ],

            [
                'question' => 'CodeIgniter versi berapa yang digunakan pada tutorial ini?',
                'answer' => 'CodeIgniter versi 4'
            ]
        ];
        echo view('faqs', $data);
    }
}