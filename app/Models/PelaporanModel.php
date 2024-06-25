<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaporanModel extends Model
// {
//     protected $table = 'laporan_sampah';
//     protected $primaryKey = 'id';
//     protected $allowedFields = ['user_id', 'title', 'description', 'photo', 'location', 'created_at'];

//     // Fungsi untuk menyimpan laporan baru
//     public function saveReport($data)
//     {
//         return $this->insert($data);
//     }
    
// }

    {
        protected $table = 'laporan_sampah';
        protected $primaryKey = 'id';
        protected $allowedFields = ['user_id', 'title', 'description', 'location', 'created_at'];

        public function getLaporanWithPhotos($userId)
        {
            return $this->select('laporan_sampah.*, laporan_foto.photo')
                ->join('laporan_foto', 'laporan_sampah.id = laporan_foto.laporan_id')
                ->where('laporan_sampah.user_id', $userId)
                ->groupBy('laporan_sampah.id')
                ->findAll();
        }
    }

class LaporanFotoModel extends Model
{
    protected $table = 'laporan_foto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['laporan_id', 'photo'];
}
