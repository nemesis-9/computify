<?php

namespace App\Controllers\Management\Technician;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    { // Default content
        $data['content'] = view('management/technician/home');

        // Check if a specific sidebar button was clicked
        $clickedButton = $this->request->getPost('sidebar_button');

        if ($clickedButton == 'dashboard') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'schedule') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'messages') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'builds') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'repair') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'addproduct') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'addcategory') {
            $data['content'] = view('');
        }

        // Pass data to the view
        return view('management/technician/home', $data);
    }
}
