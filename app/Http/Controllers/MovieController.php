<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
	/**
	 * 
	 *
     */
    public function index(){
    	return "ESTOY EN EL INDEX DEL RESOURCE";
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
