<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Dashboard';
        return view('dashboard/dashboard', $data);
    }
}
