<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterNews extends Migration
{
    public function up()
    {
        // Menambahkan kolom slug
        $this->forge->addColumn('news', [
            'slug VARCHAR(100) UNIQUE'
        ]);
    }

    public function down()
    {
        // Menghapus kolom slug
        $this->forge->dropColumn('news', 'slug');
    }
}
