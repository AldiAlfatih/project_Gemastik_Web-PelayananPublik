<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LeaderboardModel;

class AkunController extends Controller
{
    public function register()
    {
        $akunModel = new \App\Models\AkunModel();

        $username = (string) $this->request->getPost('username');
        $email = (string) $this->request->getPost('email');
        $password = (string) $this->request->getPost('password');
        $konfirmasi_password = (string) $this->request->getPost('konfirmasi_password');
        $no_telepon = (string) $this->request->getPost('no_telepon');

        if ($password !== $konfirmasi_password) {
            return redirect()->back()->with('error', 'Password dan Konfirmasi Password tidak cocok');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword,
            'no_telepon' => $no_telepon
        ];

        $akunModel->save($data);
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function autentikasi()
    {
        $akunModel = new \App\Models\AkunModel();

        // Ambil data dari form login
        $email = $this->request->getPost('email');
        $password =  (string) $this->request->getPost('password');

        // Cari user berdasarkan email
        $user = $akunModel->where('email', $email)->first();
        
        // Jika user ditemukan dan password cocok
        if ($user && password_verify($password, $user['password'])) {
            // Set session untuk user yang berhasil login
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true,
            ]);

            // Redirect ke halaman utama atau dashboard
            return redirect()->to('/');
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->with('error', 'Email atau Password salah');
        }
    }
    public function index(): string
    {
        return view('home');
    }


    public function leaderboard(): string
    {
        $model = new LeaderboardModel();
        $data['leaderboard'] = $model->orderBy('poin', 'DESC')->findAll();
        
        return view('leaderboard', $data);
    }

    public function lihat_profil(): string
    {
        return view('profile');
    }
}