<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SekolahModel;
use App\Models\KotaModel;
use App\Models\PosisiModel;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->posisiModel = new PosisiModel();
        $this->sekolahModel = new SekolahModel();
        $this->kotaModel = new KotaModel();
    }

    public function detailUser($id, $id_sekolah, $id_kabupaten)
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

        return view('admin/detail-data', $data);
    }

    public function dashboard()
    {

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        return view('admin/index');
    }

    public function lihatData()
    {

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        $data = [
            'userList' => $this->userModel->getAllUser()
        ];

        return view('admin/lihat-data', $data);
    }

    public function editData()
    {

        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        $data = [
            'userList' => $this->userModel->getAllUser()
        ];

        return view('admin/edit-data', $data);
    }

    public function ubahData($id, $id_sekolah, $id_kabupaten)
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

        return view('admin/ubah-data', $data);
    }

    public function tambahData()
    {
        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        return view('admin/add-data');
    }

    public function addUser()
    {
        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        if (!$this->validate([
            'nik' => 'required|is_unique[user.NIK,nik]',
            'name' => 'required',
            'alamat' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'noHp' => 'required',
            'JK' => 'required',
            'pendidikan' => 'required',
            'nrptk' => 'required',
            'kabupaten' => 'required',
            'sekolah' => 'required',
            'tanggalMasuk' => 'required',
            'jabatan' => 'required',
            'npwp' => 'required',
            'bpjsKes' => 'required',
            'bpjsTK' => 'required',
            'tglKeluar' => 'required',
            'nrptk' => 'required'
        ])) {
            session()->setFlashdata('error', 'Data gagal ditambahkan');
            return redirect()->to('/admin/tambahData')->withInput();
        }
        $this->userModel->save([
            'NIK' => $this->request->getVar('nik'),
            'Nama' => $this->request->getVar('name'),
            'Alamat' => $this->request->getVar('alamat'),
            'Tempat_lahir' => $this->request->getVar('tempatLahir'),
            'Tanggal_lahir' => $this->request->getVar('tanggalLahir'),
            'Agama' => $this->request->getVar('agama'),
            'Telp' => $this->request->getVar('noHp'),
            'JK' => $this->request->getVar('JK'),
            'Pendidikan_Terakhir' => $this->request->getVar('pendidikan'),
            'id_kabupaten' => $this->request->getVar('kabupaten'),
            'id_sekolah' => $this->request->getVar('sekolah'),
            'Tanggal_Masuk' => $this->request->getVar('tanggalMasuk'),
            'Jabatan' => $this->request->getVar('jabatan'),
            'No_NPWP' => $this->request->getVar('npwp'),
            'NRPTK' => $this->request->getVar('nrptk'),
            'No_BPJS_Kes' => $this->request->getVar('bpjsKes'),
            'No_BPJS_TK' => $this->request->getVar('bpjsTK'),
            'Tgl_keluar' => $this->request->getVar('tglKeluar'),

        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/ediData');
    }
    public function updateData($id)
    {
        $session = \Config\Services::session();
        if ($session->get('email') == null) {
            return redirect()->to('/auth/index');
        }

        $NIK = $this->request->getVar('nik');
        $Nama = $this->request->getVar('name');
        $Alamat = $this->request->getVar('alamat');
        $Tempat_lahir = $this->request->getVar('tempatLahir');
        $Tanggal_lahir = $this->request->getVar('tanggalLahir');
        $Agama = $this->request->getVar('agama');
        $Telp = $this->request->getVar('noHp');
        $JK = $this->request->getVar('JK');
        $Pendidikan_Terakhir = $this->request->getVar('pendidikan');
        $id_kabupaten = $this->request->getVar('kabupaten');
        $id_sekolah = $this->request->getVar('sekolah');
        $Tanggal_Masuk = $this->request->getVar('tanggalMasuk');
        $Jabatan = $this->request->getVar('jabatan');
        $No_NPWP = $this->request->getVar('npwp');
        $NRPTK = $this->request->getVar('nrptk');
        $No_BPJS_Kes = $this->request->getVar('bpjsKes');
        $No_BPJS_TK = $this->request->getVar('bpjsTK');
        $Tgl_keluar = $this->request->getVar('tglKeluar');

        $this->userModel->save([
            'id' => $id,
            'NIK' => $NIK,
            'Nama' => $Nama,
            'Alamat' => $Alamat,
            'Tempat_lahir' => $Tempat_lahir,
            'Tanggal_lahir' => $Tanggal_lahir,
            'Agama' => $Agama,
            'Telp' => $Telp,
            'JK' => $JK,
            'Pendidikan_Terakhir' => $Pendidikan_Terakhir,
            'id_kabupaten' => $id_kabupaten,
            'id_sekolah' => $id_sekolah,
            'Tanggal_Masuk' => $Tanggal_Masuk,
            'Jabatan' => $Jabatan,
            'No_NPWP' => $No_NPWP,
            'NRPTK' => $NRPTK,
            'No_BPJS_Kes' => $No_BPJS_Kes,
            'No_BPJS_TK' => $No_BPJS_TK,
            'Tgl_keluar' => $Tgl_keluar,
        ]);

        return redirect()->to('admin/editData');
    }
}