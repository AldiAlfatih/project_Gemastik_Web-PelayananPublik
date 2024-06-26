<?php 

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan_sampah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'title', 'description', 'status_laporan', 'created_at'];

    public function getReports($status_laporan = null)
    {
        if ($status_laporan) {
            return $this->where('status_laporan', $status_laporan)->findAll();
        }

        return $this->findAll();
    }
}

?>