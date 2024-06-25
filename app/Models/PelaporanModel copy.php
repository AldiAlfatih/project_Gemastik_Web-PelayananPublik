<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaporanModel extends Model
{
    protected $table = 'laporan_sampah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'title', 'description', 'photo', 'location', 'created_at'];

    // Fungsi untuk menyimpan laporan baru
    public function saveReport($data)
    {
        return $this->insert($data);
    }
}
