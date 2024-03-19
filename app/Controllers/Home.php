<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Homepage Administrasi";
        return view('home', $data);
    }
}
