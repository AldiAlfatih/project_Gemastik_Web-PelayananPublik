<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AkunModel;
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
            return redirect()->to('/home');
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah');
        }
    }
    public function index(): string
    {
        return view('home'); 
    }

    public function pelaporan(): string
    {
        return view('pelaporan');
    }

    public function setting()
    {
        $user = session()->get('user');

        return view('settingProfil', ['user' => $user]);
    }


    public function leaderboard()
    {
        $akunModel = new AkunModel();
        $leaderboardModel = new LeaderboardModel();

        // Ambil semua data dari tabel akun
        $akunList = $akunModel->findAll();

        // Array untuk menyimpan data leaderboard yang akan ditampilkan
        $leaderboardData = [];

        foreach ($akunList as $akun) {
            // Ambil poin dari leaderboard berdasarkan id akun
            $leaderboard = $leaderboardModel->where('id', $akun['id'])->first();

            if ($leaderboard) {
                $leaderboardData[] = [
                    'id' => $akun['id'],
                    'username' => $akun['username'],
                    'poin' => $leaderboard['poin']
                ];
            }
        }

        // Urutkan leaderboard berdasarkan poin secara descending
        usort($leaderboardData, function($a, $b) {
            return $b['poin'] - $a['poin'];
        });

        // Data yang akan diteruskan ke view
        $data['leaderboard'] = $leaderboardData;

        return view('leaderboard', $data);
    }

    public function lihat_profil(): string
    {
        return view('profile');
    }
}