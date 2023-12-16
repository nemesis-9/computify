<?php

namespace App\Controllers\Management\Deliverer;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    { // Default content
        $data['content'] = view('management/deliverer/home');

        // Check if a specific sidebar button was clicked
        $clickedButton = $this->request->getPost('sidebar_button');

        if ($clickedButton == 'dashboard') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'schedule') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'messages') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'requests') {
            $data['content'] = view('');
        }

        // Pass data to the view
        return view('management/deliverer/home', $data);
    }

}