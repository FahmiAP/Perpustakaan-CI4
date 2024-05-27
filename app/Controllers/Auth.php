<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        
    }



    public function LoginAdmin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'valid_email' => '{field} harus format e-mail!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!',

                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->LoginAdmin($email, $password);

            if ($cek_login) {
                //jika datanya cocok
                $level = $cek_login['level'];
                if ($level === "0") {
                    session()->set('nama_user', $cek_login['nama_user']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', $cek_login['level']);

                    //login
                    return redirect()->to(base_url('Admin'));
                } elseif ($level === "1") {
                    session()->set('nama_user', $cek_login['nama_user']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', $cek_login['level']);
                    //login
                    return redirect()->to(base_url('Admin/index1'));
                }
            } else {
                //jika gagal login karena email atau password salah
                session()->setFlashdata('pesan', 'Email atau Password Salah');
                return redirect()->to(base_url('Auth/LoginAdmin'));
            }
        } else {
            //jika entry tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/LoginAdmin'));
        }
    }
}
