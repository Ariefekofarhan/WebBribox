<?php

namespace App\Controllers;

use App\Models\UserModel;
class users extends BaseController
{
    public function eos($role = null): string
    {
        $userModel = new UserModel();
        
        $data['users'] = $userModel->getUsers();

        $data['users'] = array_filter($data['users'], function($user) {
            return $user->role_name === 'EOS';
        });
        
        return view('Admin/eos', $data);
    }
    public function pm(): string
    {
        $userModel = new UserModel();
        
        $data['superUser'] = $userModel->getUsers();

        $data['superUser'] = array_filter($data['superUser'], function($user) {
            return $user->role_name === 'PM';
        });
        return view('Admin/pm', $data);
    }

}
