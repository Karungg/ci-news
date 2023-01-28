<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        // Buat objek model $news
        $news = new NewsModel();

        /**
         * Siapkan data untuk dikirim ke view dengan nama $newses
         * dan isi datanya dengan news yang sudah terbit
         */
        $data['newses'] = $news->where('status', 'published')->findAll();

        // Kirim data ke view
        echo view('news', $data);
    }

    public function viewNews($slug)
    {
        // Buat objek model $news
        $news = new NewsModel();
        $data['news'] = $news->where([
            'slug'      => $slug,
            'status'    => 'published'
        ])->first();

        // Tampilkan 404 not found saat data tidak ditemukan
        if (!$data['news']) {
            throw PageNotFoundException::forPageNotFound();
        }

        echo view('news_detail', $data);
    }
}