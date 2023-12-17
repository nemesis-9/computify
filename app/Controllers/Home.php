<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($acc_type = "guest")
    {
        if ($acc_type == "guest") {
            return view("home");
        } elseif ($acc_type == "user") {
            return view("user/home");
        } else {
            return view("errors/html/error_404");
        }
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
