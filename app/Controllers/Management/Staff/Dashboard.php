<?php

namespace App\Controllers\Management\Staff;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    { // Default content
        $data['content'] = view('management/staff/home');

        // Check if a specific sidebar button was clicked
        $clickedButton = $this->request->getPost('sidebar_button');

        if ($clickedButton == 'dashboard') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'schedule') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'workprogress') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'messages') {
            $data['content'] = view('');
        } elseif ($clickedButton == 'stock') {
            $data['content'] = view('');
        }
        // Pass data to the view
        return view('management/staff/home', $data);
    }

}