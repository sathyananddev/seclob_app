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
}
