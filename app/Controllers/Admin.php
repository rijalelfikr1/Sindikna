<?php

namespace App\Controllers;

use App\Models\UserModel;


class Admin extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('auth-login-2');
    }

    public function editData()
    {

        $data = [
            'userList' => $this->userModel->getAllUser()
        ];

        return view('admin/edit-data', $data);
    }

    public function ubahData($id)
    {

        $data = [
            'DetailUser' => $this->userModel->find($id),
        ];

        return view('admin/ubah-data', $data);
    }

    public function tambahData()
    {
        return view('admin/add-data');
    }

    public function addUser()
    {
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
            'JK	' => $this->request->getVar('JK'),
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
}