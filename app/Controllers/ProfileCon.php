<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use CodeIgniter\Controller;

class ProfileCon extends Controller
{
    protected $profileModel; // Deklarasikan properti profileModel

    public function __construct()
    {
        helper(['form', 'url']);
        $this->profileModel = new ProfileModel(); // Inisialisasi model di dalam konstruktor
    }

    public function index()
    {
        // Ambil data pengguna dari session
        $user = session()->get('user');

        // Load view profile dengan data pengguna
        return view('profile', ['user' => $user]);
    }

    public function update()
    {
        // Validasi input
        $validationRules = [
            'email' => 'required|valid_email',
            'phone' => 'required',
            'gender' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'subdistrict' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/profile')->withInput()->with('validation', $this->validator);
        }

        // Ambil data dari form
        $username = session()->get('user')['username'];
        $data = [
            'email' => $this->request->getPost('email'),
            'no_telepon' => $this->request->getPost('phone'),
            'jenis_kelamin' => $this->request->getPost('gender'),
            'provinsi' => $this->request->getPost('province'),
            'kota' => $this->request->getPost('city'),
            'kecamatan' => $this->request->getPost('district'),
            'kelurahan' => $this->request->getPost('subdistrict')
        ];

        // Panggil method updateUser dari model
        $this->profileModel->updateUser($username, $data);

        // Set session user baru setelah update
        $user = $this->profileModel->getUserByUsername($username);
        session()->set('user', $user);

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->to('/profile')->with('success', 'Profil berhasil diperbarui.');
    }
}



?>
