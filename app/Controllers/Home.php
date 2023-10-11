<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function kami(): string
    {
        return "BARCELONA (MES QUE UN CLUB)";
    }

    public function contact(): string
    {
        return "HALLO OM INI DARI KONTAK";
    }
    
    public function about(): string
    {
        return "HALLO OM INI DARI About";
    }
    
}



