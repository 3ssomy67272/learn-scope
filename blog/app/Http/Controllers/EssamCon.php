<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EssamCon extends Controller
{
    public function essam()  {
        $name = 'samar';
        $gender = "they";
        return view('essam', ['name' => $name], ['gender' => $gender]);
    }
}
