<?php

namespace App\Controllers;

use App\Models\MasterModel;
use App\Models\UkerModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        return view('User/index');
    }

    public function master(): string
    {

        $masterModel = new MasterModel();

        $data['master'] = $masterModel->getKanwil();

        return view('User/masterData', $data);
    }
    public function kanca(): string
    {

        $ukerModel = new UkerModel();

        $data['uker'] = $ukerModel->getKanwil();

        return view('User/masterUker', $data);
    }

    public function search(): \CodeIgniter\HTTP\Response
    {

        $masterModel = new MasterModel();

        $value = $this->request->getGet('dataInput');
        $data['master'] = $masterModel->searchKanwil($value);
        $responseData = [
            "status" => 200,
            "data" => $data['master'],  // Example: Use the POST value if provided, otherwise return 2
        ];
        return $this->response->setJSON($responseData);
    }
}
