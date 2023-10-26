<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function user()
    {
        //if user logged in
        //return view('package');
        //else
        // return redirect()->redirect("/package");

        $model = new UserModel();
        // $req = [];
        // if(isset($_POST)){
        //     $req = $_POST;
        // }
		// $data['users'] = $model->user($req);
        // echo view('test', $data);
        return redirect()->redirect("/package");
    }
}
