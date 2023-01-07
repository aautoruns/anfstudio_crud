<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'harga',
        'stok',
        'gambar',
        'created_by',
        'created_date',
        'updated_by',
        'updated_date'
    ];
    protected $returnType = 'App\Entities\Barang';
    protected $useTimestamps = false;
}
