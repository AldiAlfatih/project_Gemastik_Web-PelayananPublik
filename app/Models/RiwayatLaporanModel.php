<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatLaporanModel extends Model
{
    protected $table = 'laporan_sampah';
    protected $allowedFields = ['title', 'description', 'location', 'status', 'created_at'];

    public function getRiwayatLaporan($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}
