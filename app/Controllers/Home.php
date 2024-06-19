<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function login(): string
    // {
    //     return view('login');
    // }
    // public function index(): string
    // {
    //     return view('index');
    // }
    public function home(): string
    {
        return view('home');
    }
}