<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('user/index');
    }

    public function dataprovinsi()
    {
        return view('user/data-provinsi');
    }

    public function guruprov()
    {
        $data = [
            'userList' => $this->userModel->getAllUser()
        ];

        return view('user/data-guru-prov', $data);
    }

    public function datatanjungpinang()
    {
        return view('user/tanjungpinang');
    }

    public function kabupatenKota()
    {
        return view('user/data-kab_kot');
    }

    public function datadiri($id)
    {
        $data = [
            'DetailUser' => $this->userModel->find($id),
        ];

        return view('user/data-diri', $data);
    }
}