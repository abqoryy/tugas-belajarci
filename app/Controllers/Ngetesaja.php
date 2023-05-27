<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Nama",
            "name" => "Muflih"
        ];

        echo view('index', $data);
    }
}
