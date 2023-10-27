<?php

 namespace App\Controllers;
 use CodeIgniter\Controller;

class Member extends Controller
{
    public function index()
    {

        return view('header')
            . view('menu')
            . view('member')
            . view('footer');
    }
    public function save(){
        //$data = input('');
        $data['mega_header'][] = (object) array('title' => 'portfolio image' ,
    'img' => 'https://complete path of image' );
    $data['data'] = $_POST;

        return view('test', $data);
    }

    
    public function profile()
    {

        return view('list_header') 
        .  view('menu') 
        . view('profile')
        . view('list_footer');
    }
}
