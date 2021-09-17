<?php

namespace App\Models;

use CodeIgniter\Model;

class PosisiModel extends Model
{
    protected $table      = 'jabatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['posisi', 'id'];

    protected $useTimestamps = true;

    public function getAllPosisi()
    {
        $this->select('posisi');

        $query = $this->get();
        $result = $query->getResultArray();

        return $result;
    }
}