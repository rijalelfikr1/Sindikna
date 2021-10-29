<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{


    public function __construct()
    {
        //
    }

    public function index()
    {

        $session = \Config\Services::session();
        if ($session->get('email') != null) {
            return redirect()->to('/admin/dashboard');
        }

        return view('auth/auth-login-2');
    }

    public function login()
    {
        $session = \Config\Services::session();
        $model = new AuthModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cekUser = $model->where('email', $email)->first();

        if ($cekUser == null) {
            session()->setFlashdata('error', 'Email atau password salah');
            return redirect()->to('/auth/index');
        } else {
            if (password_verify($password, $cekUser['password'])) {
                $data = [
                    'email'  => $cekUser['email']
                ];
                $session->set($data);

                return redirect()->to('/admin/dashboard');
            } else {
                session()->setFlashdata('error', 'Email atau password salah');
                return redirect()->to('/auth/index')->withInput();
            }
        }
    }

    public function keluar()
    {
        return view('auth/auth-login-2');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->remove('email');
        return redirect()->to('/auth/index')->withInput();
    }
}