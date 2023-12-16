<?php

namespace App\Controllers\Management\Manager;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    { // Default content
        $data['content'] = view('management/manager/home');

        // Check if a specific sidebar button was clicked
        $clickedButton = $this->request->getPost('sidebar_button');

        if ($clickedButton == 'analyze') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'employee') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'events') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'companies') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'messages') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'stock') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'dashboard') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'schedule') {
            $data['content'] = view('');
        }

        // Pass data to the view
        return view('management/manager/home', $data);
    }

}