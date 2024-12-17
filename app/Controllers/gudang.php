<?php

namespace App\Controllers;

use App\Models\gudangModel;
use App\Models\KanwilModel;

class gudang extends BaseController
{
    protected $gudangModel;
    protected $kanwilModel;

    public function __construct()
    {
        $this->gudangModel = new gudangModel();
        $this->kanwilModel = new KanwilModel();
    }

    public function index()
    {
        $gudang = $this->gudangModel
        ->join('tb_kanwil', 'tb_kanwil.id_kanwil = tb_gudang.id_kanwil')
        ->orderBy('tb_kanwil.nama_kanwil', 'ASC')
        ->findAll();
        $kanwil = $this->kanwilModel->findAll();
        
        $data = [
            'title' => 'Daftar Gudang',
            'gudang' => $gudang,
            'kanwil' => $kanwil,
        ];

        return view('User/gudang', $data);
    }
    public function update($id)
    {
        $data = [
            'id_kanwil'      => $this->request->getPost('id_kanwil'),
            'nama_gudang'   => $this->request->getPost('nama_gudang'),
            'alamat_gudang' => $this->request->getPost('alamat_gudang'),
            'PIC'           => $this->request->getPost('PIC')
        ];

        $this->gudangModel->update($id, $data);
        return redirect()->to('/gudang');
    }

    public function delete($id)
    {
        $this->gudangModel->delete($id);
        return redirect()->to('/gudang');
    }

    public function store()
    {
        // Ambil data dari form
        $gudangModel = new GudangModel();

        // Ambil inputan form
        $data = [
            'id_kanwil' => $this->request->getPost('id_kanwil'), // ID kanwil yang dipilih
            'nama_gudang' => $this->request->getPost('nama_gudang'),
            'alamat_gudang' => $this->request->getPost('alamat_gudang'),
            'PIC' => $this->request->getPost('PIC'),
        ];

        // Simpan data ke tb_gudang
        $gudangModel->save($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/gudang');
    }

    


}
