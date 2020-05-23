<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	public function inicio(){
    	return view('libros.inicio');
    }

    public function index(){
    	return view('index');
    }
}
