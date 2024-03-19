<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'My Profile';
        return view('dashboard/user/index', $data);
    }
}
