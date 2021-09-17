<?php

namespace App\Models;

use CodeIgniter\Model;

class KotaModel extends Model
{
    protected $table      = 'kabupatenkota';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'Kota'];
}