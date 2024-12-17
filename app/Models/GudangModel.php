<?php

namespace App\Models;

use CodeIgniter\Model;

class GudangModel extends Model
{
    protected $table      = 'tb_gudang'; 
    protected $primaryKey = 'id_gudang';

    protected $useTimestamps = true;

    protected $allowedFields = ['id_kanwil', 'alamat_gudang', 'PIC'];

    public function getGudangWithKanwil()
    {
        return $this->select('tb_gudang.*, tb_kanwil.nama_kanwil')
                    ->join('tb_kanwil', 'tb_kanwil.id_kanwil = tb_gudang.id_kanwil')
                    ->limit(10)
                    ->findAll();
    }
}
