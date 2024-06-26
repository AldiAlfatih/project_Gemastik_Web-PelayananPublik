<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    public function register(): string
    {
        return view('register');
    }

    public function login(): string
    {
        return view('login');
    }

    public function index(): string
    {
        return view('home');
    }
    
    public function leaderboard(): string
    {
        return view('leaderboard');
    }
    

}
