<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class PruebaController extends BaseController{
    public function index(){
        //return "Bienvenido";
        return view('index');
    }

}