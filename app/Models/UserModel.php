<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_rek', 'NIK', 'Nama', 'Alamat', 'Tempat_lahir', 'Pendidikan_Terakhir', 'Tanggal_Masuk', 'Agama', 'Telp', 'JK', 'id_sekolah', 'id_kabupaten', 'Jabatan', 'No_NPWP', 'No_BPJS_Kes', 'No_BPJS_TK', 'Tgl_keluar'];

    protected $useTimestamps = true;

    public function getAllUser()
    {
        $this->select('user.id as id, no_rek, NIK, Nama, Alamat, Pendidikan_Terakhir, Kota, Tempat_lahir, Agama, Telp, JK, id_sekolah, sekolah, id_kabupaten, Tanggal_Masuk, Jabatan, No_NPWP, No_BPJS_Kes, No_BPJS_TK, Tgl_keluar');
        $this->join('kabupatenkota', 'kabupatenkota.id = user.id_kabupaten');
        $this->join('sekolah', 'sekolah.id = user.id_sekolah');
        $query = $this->get();
        $result = $query->getResultArray();

        return $result;
    }



    public function getUserDetail($id)
    {
        $this->select('user.id as id, no_rek, NIK, Nama, Alamat, Pendidikan_Terakhir, Kota, Tempat_lahir, Agama, Telp, JK, id_sekolah, sekolah, id_kabupaten, Tanggal_Masuk, Jabatan, No_NPWP, No_BPJS_Kes, No_BPJS_TK, Tgl_keluar');
        $this->where('user.id', $id);
        $this->join('kabupatenkota', 'kabupatenkota.id = user.id_kabupaten');
        $this->join('sekolah', 'sekolah.id = user.id_sekolah');

        $query = $this->get();
        $result = $query->getResultArray();
        return $result;
    }
}