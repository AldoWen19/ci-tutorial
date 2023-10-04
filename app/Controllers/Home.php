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

    public function kontak(): string
    {
        return "HALLO OM INI DARI KONTAK";
    }
    
}
