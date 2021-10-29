<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];

    protected $useTimestamps = false;

    public function getByEmail($email)
    {
        $this->select('user.id as id, no_rek, NIK, Nama, Alamat, Pendidikan_Terakhir, Kota, Tempat_lahir, Agama, Telp, JK, id_sekolah, sekolah, id_kabupaten, Tanggal_Masuk, Jabatan, No_NPWP, No_BPJS_Kes, No_BPJS_TK, Tgl_keluar');
        $this->join('kabupatenkota', 'kabupatenkota.id = user.id_kabupaten');
        $this->join('sekolah', 'sekolah.id = user.id_sekolah');
        $query = $this->get();
        $result = $query->getResultArray();

        return $result;
    }
}