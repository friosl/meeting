<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        //Aquí van las lineas donde hacemos algo antes de llamar la vista
        return view('home.index');
    }

}
