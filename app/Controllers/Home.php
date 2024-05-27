<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/index');
    }
    public function regis(): string
    {
        return view('pages/register-admin');
    }
    public function login(): string
    {
        return view('pages/login-admin');
    }
    public function user(): string
    {
        return view('pages/landing');
    }
    public function daftar(): string
    {
        return view('pages/daftar');
    }
}
