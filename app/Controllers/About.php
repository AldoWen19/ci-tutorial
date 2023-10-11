<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return "Ini dari File About, dengan Method Index";
    }

    public function contact($param1 = null, $param2 = null)
    {
        if (isset($param1) && isset($param2)) {
            return "Ini dari File About, dengan Method contact dan Ada Parameter dan data parameternya yaitu : ", $param1,"dan",$param2;
        }
        return "Ini dari file About, dengan Method contact";
    }
    
}

