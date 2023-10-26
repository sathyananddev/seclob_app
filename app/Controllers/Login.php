<?php

namespace App\Controllers;

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
        return redirect()->redirect("login");
    }
}
