<?php

namespace App\Controllers;
use App\Models\UserModel;
//session_start();

class Login extends BaseController
{
//     public function __construct()
// {
//     parent::__construct();
//     $this->load->helper('url');

//     $this->load->helper('form');
//     $this->load->helper('url');
//     $this->load->library('form_validation');
//     $this->load->helper('security');

//     //load user model
//     $this->load->model('User');

// }
    public function index(): string
    {
        return view('login');
    }

    public function user()
    {
        //if user logged in
        //return view('package');
        $model = new UserModel();
        $req = [];
        if(isset($_POST)){
            //$req = $_POST;
            $req = array('email'=>$_POST['email'],'password'=>md5($_POST['password']));
        }        
		$result = $model->user($req);
        if(count($result) > 0){
            session_start();
            $user = $result[0];
            $_SESSION['email'] = $user->email;
            $_SESSION['isLoggedIn'] = true;
            return redirect()->redirect("/package");
        }else{
            return redirect()->redirect("/login");
        }
        // echo view('test', $data);
        
    }

    public function logout(){
        // $session = session();
        // $session->close();
        //session_reset();
        session_start();
        session_destroy();
        return redirect()->redirect("/login");
        //$this->session->close();
    }
}
