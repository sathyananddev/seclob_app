<?php

namespace App\Controllers;

use App\Models\PackageModel;
use CodeIgniter\Controller;

//session_start();

class Package extends Controller
{
    public function index()
    {
        //$userData = $_SESSION;
        // or:
        //$userData = $session->get();
        //$userData['isLoggedIn'];
        return view('header')
            . view('menu')
            . view('package')
            . view('footer');
    }

    public function test()
    {
        return view('header');
    }

    public function save()
    {
        $model = new PackageModel();
        $data = $_POST;
        $planName = $this->request->getPost('planName');
        $amount = $this->request->getPost('amount');
        $amountGst = $this->request->getPost('amountGst');        
        $users = $this->request->getPost('users');
        $addOnUsers = $this->request->getPost('addOnUsers');

        $data = [
            'package_name' => $planName,
            'package_amount' => $amount,
            'package_gst_excluded' => $amountGst,
            'users'=>$users,
            'add_on_users'=>$addOnUsers
        ];

        $result = $model->add($data);
        if ($result) {
            echo "New package added successfully.";
        } else {
            echo "Something went wrong";
        }
        return redirect()->redirect("/package");
    }

    public function list(){
        $model = new PackageModel();    
		$result = $model->get(); 
        print_r($result);       
    }

    public function edit($id){
        //$package = PackageModel::find($id);
    }
}
