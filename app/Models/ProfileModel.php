<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users'; // Sesuaikan dengan nama tabel di database Anda
    protected $primaryKey = 'id'; // Sesuaikan dengan nama primary key tabel

    protected $allowedFields = [
        'email',
        'no_telepon',
        'jenis_kelamin',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan'
    ]; // Daftar kolom yang dapat diisi oleh pengguna

    // Method untuk mendapatkan data pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)
                    ->first(); // Ambil data pertama yang sesuai
    }

    // Method untuk mengupdate data pengguna berdasarkan username
    public function updateUser($username, $data)
    {
        $this->where('username', $username)
             ->set($data)
             ->update(); // Lakukan update data
    }
}
