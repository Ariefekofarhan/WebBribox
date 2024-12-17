<?php

namespace App\Controllers;

class movement extends BaseController
{
    public function req(): string
    {
        return view('User/request');
    }
    public function approve(): string
    {
        return view('Admin/approve');
    }
    public function history(): string
    {
        return view('Admin/history');
    }

}
