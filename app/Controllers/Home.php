<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    public function register(): string
    {
        return view('register');
    }

    public function home(): string
    {
        return view('home');
    }

    public function insert()
    {
        // Mengambil data dari POST request
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        // Validasi input
        if (!$this->validate([
            'username' => 'required|alpha_numeric_space|min_length[3]|is_unique[akun.username]',
            'email'    => 'required|valid_email|is_unique[akun.email]',
            'password' => 'required|min_length[6]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Hash password
        // $data['password_hash'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Membuat instance dari UserModel
        $userModel = new UserModel();

        // Menyimpan data ke database
        if ($userModel->insert($data)) {
            return redirect()->to('/home')->with('status', 'Akun berhasil dibuat');
        } else {
            return redirect()->back()->withInput()->with('errors', $userModel->errors());
        }
    }
}
