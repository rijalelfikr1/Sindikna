<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SekolahModel;
use App\Models\KotaModel;
use App\Models\PosisiModel;

class User extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->posisiModel = new PosisiModel();
        $this->sekolahModel = new SekolahModel();
        $this->kotaModel = new KotaModel();
    }

    public function index()
    {
        return view('user/index');
    }

    public function dataprovinsi()
    {
        $db     = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->countAllResults();

        $builder->like('JK', 'Laki-Laki');
        $laki = $builder->countAllResults();
        $builder->like('JK', 'Perempuan');
        $perempuan = $builder->countAllResults();
        $builder->like('JK');
        $jumlah = $builder->countAllResults();


        $data = [
            'posisiList' => $this->posisiModel->getAllPosisi(),

            'laki' => $laki,
            'perempuan' => $perempuan,
            'jumlah' => $jumlah
        ];

        return view('user/data-provinsi', $data);
    }

    public function dataprov()
    {
        $db     = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->countAllResults();
        $builder->like('JK');
        $jumlah = $builder->countAllResults();
        $data = [
            'jumlah' => $jumlah,

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
            'Sekolah' => $this->sekolahModel->where('id', $id)->findAll()[0],
            'Kota' => $this->kotaModel->where('id', $id)->findAll()[0]
        ];

        return view('user/data-diri', $data);
    }
}