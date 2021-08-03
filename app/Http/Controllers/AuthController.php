<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "Nis"=>3103119053,
            "Nama"=>"Dimas Sodiin",
            "Gender"=>"Laki-laki",
            "Phone"=>628818572131,
            "Class"=>"XII RPL 2"
        ];
    }
}
