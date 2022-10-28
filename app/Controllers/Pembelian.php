<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pembelian extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'items/index';
        return view('layout', $data);
    }

    public function dashboard()
    {
        if (!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'items/index';
        return view('layout', $data);
    }
}