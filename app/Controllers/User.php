<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        $model = new \App\Models\UserModel();
        $data = [
            'users' => $model->paginate(15),
            'pager' => $model->pager,
        ];
        return view('user/index', [
            'data' => $data,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelUser = new \App\Models\UserModel();
        $delete = $modelUser->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}
