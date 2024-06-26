<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportImageModel extends Model
{
    protected $table = 'laporan_foto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['laporan_id', 'photo'];

    public function getImagesByReportId($laporan_id)
    {
        return $this->where('laporan_id', $laporan_id)->findAll();
    }
}
