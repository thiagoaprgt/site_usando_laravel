<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function homeTemplate() {
        return view('home');
    }

    public function cadastro() {
        return view('cadastro');
    }

}
