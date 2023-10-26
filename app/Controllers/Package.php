<?php

namespace App\Controllers;
use App\Models\PlanModel;
use CodeIgniter\Controller;

class Package extends Controller
{
    
    public function index()
    {

        return view('header')
            . view('menu')
            . view('package')
            . view('footer');
    }

    public function test(){
        return view('header');
    }
    public function profile(){
        return view('profile');
    }
}
