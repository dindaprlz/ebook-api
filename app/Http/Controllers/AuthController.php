<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "Nis" => "3103118048",
            "Name" => "Dinda Aprilia",
            "Gender" => "Perempuan",
            "Phone" => "081456778",
            "Class" => "Xii RPL 2",
        ];
    }
}