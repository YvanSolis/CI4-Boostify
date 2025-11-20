<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        // check if user is logged in and is admin
        if (!session()->has('user') || session('user')['type'] !== 'employee') {
            redirect()->to('/login')->send();
            exit;
        }
    }

    public function dashboard_page()
    {
        return view('admin/dashboard_page');
    }
}
