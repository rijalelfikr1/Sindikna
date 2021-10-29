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

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        return view('user/index');
    }

    public function dataprovinsi()
    {

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

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

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

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

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        return view('user/tanjungpinang');
    }

    public function kabupatenKota()
    {

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        return view('user/data-kab_kot');
    }

    public function datadiri($id, $id_kabupaten, $id_sekolah)
    {


        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        $data = [
            'DetailUser' => $this->userModel->find($id),
            'Sekolah' => $this->sekolahModel->where('id', $id_sekolah)->findAll()[0],
            'Kota' => $this->kotaModel->where('id', $id_kabupaten)->findAll()[0]
        ];

        return view('user/data-diri', $data);
    }
}