<?php

namespace App\Controllers\Management\Stockkeeper;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    { // Default content
        $data['content'] = view('management/stockkeeper/home');

        // Check if a specific sidebar button was clicked
        $clickedButton = $this->request->getPost('sidebar_button');

        if ($clickedButton == 'dashboard') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'schedule') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'messages') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'stock') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'addproduct') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'addcategory') {
            $data['content'] = view('');
        }

        // Pass data to the view
        return view('management/stockkeeper/home', $data);
    }
}