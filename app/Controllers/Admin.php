<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    protected $userModel, $db, $builder;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index(): string
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('dashboard/admin/index', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();
        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('dashboard/admin/detail', $data);
    }

    public function add()
    {
        $data = ['title' => 'Tambah Data Pengguna'];

        return view('dashboard/admin/add-user', $data);
    }

    public function save()
    {
        $this->userModel->save([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'password_hash' => $this->request->getVar('password_hash'),
            'active' => 1
        ]);

        session()->setFlashdata('message', 'Data pengguna berhasil ditambahkan.');

        return redirect()->to('/dashboard/admin');
    }
}
