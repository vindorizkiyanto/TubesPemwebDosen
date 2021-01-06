<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 'keranjang';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_kopi', 'slug', 'jumlah', 'gambar'];

    public function getKeranjang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
