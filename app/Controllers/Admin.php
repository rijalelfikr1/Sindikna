<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('auth-login-2');
    }
    public function tambahData()
    {
        return view('admin/add-data');
    }
}