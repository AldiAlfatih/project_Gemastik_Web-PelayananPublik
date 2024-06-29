<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanFotoModel extends Model
{
    protected $table = 'laporan_foto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['laporan_id', 'photo'];
}