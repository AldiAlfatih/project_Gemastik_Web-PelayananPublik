<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form_view');
    }

    public function submit()
    {
        $barangModel = new BarangModel();

        // Mendapatkan data dari form
        $namaLengkap = $this->request->getPost('nama-lengkap');
        $nomorTelepon = $this->request->getPost('nomor-telepon');
        $jenisBarang = $this->request->getPost('jenis-barang');
        $kuantitasBarang = $this->request->getPost('kuantitas-barang');
        $metodePenyerahan = $this->request->getPost('metode-penyerahan');

        // Menangani upload file
        $gambarBarang = $this->request->getFile('gambar-barang');

        if ($gambarBarang->isValid() && !$gambarBarang->hasMoved()) {
            $imageName = $gambarBarang->getRandomName();
            $gambarBarang->move(WRITEPATH . 'uploads', $imageName);

            // Menyimpan informasi ke database
            $barangData = [
                'nama_lengkap' => $namaLengkap,
                'nomor_telepon' => $nomorTelepon,
                'jenis_barang' => $jenisBarang,
                'kuantitas_barang' => $kuantitasBarang,
                'gambar_barang' => $imageName,
                'metode_penyerahan' => $metodePenyerahan
            ];

            $barangModel->save($barangData);

            return redirect()->to('/form')->with('status', 'Data berhasil disimpan');
        } else {
            return redirect()->to('/form')->with('status', 'Gagal mengunggah gambar');
        }
    }
}
