<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterModel extends Model
{
    protected $table = 'master_data';
    protected $primaryKey = 'id_brg';

    protected $allowedFields = [
        'id_kanwil',
        'id_brg',
        'aset_id',
        'sn',
        'nama_perangkat',
        'merek',
        'umur_perangkat',
        'nama_user',
        'jabatan',
        'pn',
        'keterangan'
    ];
    public function getKanwil()
    {
        return $this->select('master_data.*, tb_kanwil.nama_kanwil')
            ->join('tb_kanwil', 'tb_kanwil.id_kanwil = master_data.id_kanwil')
            ->limit(10)
            ->asObject()
            ->findAll();

    }

    public function searchKanwil($value)
    {
        return $this->select('master_data.*, tb_kanwil.nama_kanwil')
            ->join('tb_kanwil', 'tb_kanwil.id_kanwil = master_data.id_kanwil')
            ->like('master_data.nama_perangkat', $value) // LIKE condition for nama_perangkat
            ->orLike('master_data.sn', $value)  // LIKE condition for sn (with OR between both conditions)
            ->asObject()
            ->findAll();
    }


}

