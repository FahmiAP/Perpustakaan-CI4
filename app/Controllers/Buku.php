<?php

namespace App\Controllers;

class Buku extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Daftar Buku'
        ];
        return view('buku/index');
    }
}
