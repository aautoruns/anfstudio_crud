<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'detail',
        'gambar'
    ];
    public function getAllPortofolio()
    {
        return $this->db->table('portofolio')->get()->getResultArray();
    }
    public function getPortofolioById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
