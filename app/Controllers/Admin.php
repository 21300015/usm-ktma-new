<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login(): string
    {
        return view('login');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
}
