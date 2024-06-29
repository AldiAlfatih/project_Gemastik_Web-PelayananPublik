<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use \App\Models\LaporanFotoModel;
use \App\Models\PelaporanModel;

class ControlMenu extends Controller
{
    public function indexlapor()
    {
        // Load view untuk halaman pelaporan
        $session = session();
        $data['success'] = $session->getFlashdata('success');
        $data['error'] = $session->getFlashdata('error');
        return view('pelaporan', $data);
    }

    public function infoleadeboard() {
        return view('leaderboard');
    }

    // public function submit()
    // {
    //     // Ambil data dari form laporan
    //     $title = $this->request->getPost('title');
    //     $description = $this->request->getPost('description');
    //     $location = $this->request->getPost('location');
    //     $photo = $this->request->getFile('photo');

    //     // Validasi foto
    //     if ($photo->isValid() && !$photo->hasMoved()) {
    //         // Pindahkan foto ke folder tertentu
    //         $newName = $photo->getRandomName();
    //         $photo->move(ROOTPATH . 'public/uploads', $newName);

    //         // Simpan data laporan ke database
    //         $pelaporanModel = new \App\Models\PelaporanModel();
    //         $data = [
    //             'user_id' => session()->get('user_id'),
    //             'title' => $title,
    //             'description' => $description,
    //             'location' => $location,
    //             'photo' => $newName,
    //             'created_at' => date('Y-m-d H:i:s')
    //         ];
    //         $pelaporanModel->saveReport($data);

    //         // Redirect ke halaman sukses atau halaman lain
    //         return redirect()->to('/home')->with('success', 'Laporan berhasil dikirim');
    //     } else {
    //         // Jika foto tidak valid, kembalikan ke halaman laporan dengan pesan error
    //         return redirect()->back()->withInput()->with('error', 'Gagal mengunggah foto');
    //     }
    // }

    public function submit()
    {
        // Pastikan user sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Validasi input
        // if (!$this->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'location' => 'required',
        //     'photo' => [
        //         'uploaded[photo]',
        //         'mime_in[photo,image/jpg,image/jpeg,image/png]',
        //         'max_size[photo,2048]',
        //     ],
        // ])) {
        //     return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        // }

        // $laporanModel = new \App\Models\PelaporanModel();
        // $laporanFotoModel = new \App\Models\LaporanFotoModel();

        // $userId = session()->get('user_id');
        // $title = $this->request->getPost('title');
        // $description = $this->request->getPost('description');
        // $location = $this->request->getPost('location');
        // $photos = $this->request->getFiles('photo');
        
        // // Simpan data laporan
        // $laporanId = $laporanModel->insert([
        //     'user_id' => $userId,
        //     'title' => $title,
        //     'description' => $description,
        //     'location' => $location,
        //     'created_at' => date('Y-m-d H:i:s')
        // ]);

        // // Simpan setiap foto yang diunggah
        // foreach ($photos['photo'] as $photos) {
        //     if ($photos->isValid() && !$photos->hasMoved()) {
        //         $newName = $photos->getRandomName();
        //         $photos->move(WRITEPATH . 'uploads', $newName);

        //         $laporanFotoModel->insert([
        //             'laporan_id' => $laporanId,
        //             'photo' => $newName
        //         ]);
        //     }
        // }

        $session = session();
        $reportModel = new PelaporanModel();
        $photoModel = new LaporanFotoModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'location' => $this->request->getPost('location'),
            'user_id' => $session->get('user_id'), // Ambil user_id dari session
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($reportModel->save($data)) {
            $reportId = $reportModel->getInsertID();
            $files = $this->request->getFiles();

            if (isset($files['photos'])) {
                foreach ($files['photos'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $fileName = $file->getRandomName();
                        $file->move(WRITEPATH . 'uploads', $fileName);

                        $photoData = [
                            'laporan_id' => $reportId,
                            'photo' => $fileName,
                        ];

                        $photoModel->save($photoData);
                    }
                }
            }

            $session->setFlashdata('success', 'Report successfully created!');
        } else {
            $session->setFlashdata('error', 'Failed to create report.');
        }
 
        return redirect()->to('/pelaporan')->with('success', 'Laporan berhasil diajukan.');
    }

    public function riwayatLaporan()
    {
        $riwayatModel = new \App\Models\RiwayatLaporanModel();
        $userId = session()->get('user_id');
        $riwayatLaporan = $riwayatModel->getRiwayatLaporan($userId);

        return view('riwayat-laporan', ['riwayatLaporan' => $riwayatLaporan]);
    }



}
