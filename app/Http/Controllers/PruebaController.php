<?php

namespace Cinema\Http\Controllers;


class PruebaController extends Controller
{

    public function index()
    {
        return "Hola desde Controller";       
    }

    public function nombre($nombre = "adam"){
        return "Mi nombre es: ".$nombre;
    }
}