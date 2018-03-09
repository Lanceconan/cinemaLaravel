<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class FrontController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth', ['only'=>['admin']]);
    }
    
    /**
	 * 
	 *
     */
    public function index(){
    	return view('index');
    }

    public function contacto(){
    	return view('contacto');
    }

    public function reviews(){
    	return view('reviews');
    }

    public function admin(){
        return view('admin.index');
    }

    /**
	 * 
	 *
     */
    public function create(){
    	return "ESTE ES EL FORMULARIO PARA CREAR";
    }

    /**
	 * 
	 *
     */
    public function store(){

    }

    /**
	 * 
	 *
     */
    public function show($id){

    }

    /**
	 * 
	 *
     */
    public function edit($id){

    }

    /**
	 * 
	 *
     */
    public function update($id){


    }

    /**
	 * 
	 *
     */
    public function destroy($id){

    }
}
