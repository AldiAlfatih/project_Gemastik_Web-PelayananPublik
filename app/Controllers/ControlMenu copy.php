<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class ControlMenu extends Controller
{
    public function indexlapor()
    {
        // Load view untuk halaman pelaporan
        return view('pelaporan');
    }

    public function submit()
    {
        // Ambil data dari form laporan
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $location = $this->request->getPost('location');
        $photo = $this->request->getFile('photo');

        // Validasi foto
        if ($photo->isValid() && !$photo->hasMoved()) {
            // Pindahkan foto ke folder tertentu
            $newName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/uploads', $newName);

            // Simpan data laporan ke database
            $pelaporanModel = new \App\Models\PelaporanModel();
            $data = [
                'user_id' => session()->get('user_id'),
                'title' => $title,
                'description' => $description,
                'location' => $location,
                'photo' => $newName,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $pelaporanModel->saveReport($data);

            // Redirect ke halaman sukses atau halaman lain
            return redirect()->to('/home')->with('success', 'Laporan berhasil dikirim');
        } else {
            // Jika foto tidak valid, kembalikan ke halaman laporan dengan pesan error
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah foto');
        }
    }
}
