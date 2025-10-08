<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index(): string
    {
        return view('users/landing_page');
    }

    public function login_page(): string
    {
        return view('users/login_page');
    }

    public function signup_page(): string
    {
        return view('users/signup_page');
    }

    public function moodboard_page(): string
    {
        return view('users/moodboard_page');
    }

    public function roadmap_page(): string
    {
        return view('users/roadmap_page');
    }
}
