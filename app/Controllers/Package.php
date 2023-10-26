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
            . view('plan')
            . view('footer');
    }
}
