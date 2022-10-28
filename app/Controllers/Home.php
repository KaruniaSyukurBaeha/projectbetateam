<?php

namespace App\Controllers;

class Home extends BaseController
{
    // test ubah sesuatu
    public function index()
    {
        return view('welcome_message');
    }
}