<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class History extends BaseController
{
    public function index()
    {
        return view("user/history");
    }

    public function show($id)
    {
    }

    public function delete($id)
    {
    }
}