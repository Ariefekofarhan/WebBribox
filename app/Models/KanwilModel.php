<?php

namespace App\Models;

use CodeIgniter\Model;

class KanwilModel extends Model
{
    protected $table      = 'tb_kanwil';
    protected $primaryKey = 'id_kanwil';
    
    // Kolom yang bisa diambil dari tabel tb_kanwil
    protected $allowedFields = ['id_kanwil','nama_kanwil'];
    

}

