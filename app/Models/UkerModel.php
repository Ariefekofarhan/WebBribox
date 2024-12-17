<?php

namespace App\Models;

use CodeIgniter\Model;

class UkerModel extends Model
{
    protected $table      = 'tb_kanca'; 
    protected $primaryKey = 'id_kanca';

    protected $useTimestamps = true;

    protected $allowedFields = ['id_kanwil', 'kode_kanca', 'kanca', 'kode_unit', 'nama_unit'];

    public function getKanwil()
    {
        return $this->select('tb_kanca.*, tb_kanwil.nama_kanwil')
                    ->join('tb_kanwil', 'tb_kanwil.id_kanwil = tb_kanca.id_kanwil')
                    ->limit(10)
                    ->asObject()
                    ->findAll();
    }
}
