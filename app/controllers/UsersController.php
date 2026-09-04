<?php

class UsersController extends Controller
{
    public function index()
    {
        $this->call->model('UsersModel');
        $users = $this->UsersModel->all();

        $data['users'] = $users;
        $this->call->view('users_view', $data);
    }
}
