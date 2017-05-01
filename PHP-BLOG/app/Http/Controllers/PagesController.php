<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {

    	$post = Posts::all();

    	return view('welcome', ['data' => $post]);
    }

    public function about() {

    	$home = ['name' => 'Developer Full Stack'];

		return view('about',  [
			'data'=> 'Developer Full Stack',
			'skills'=> 'NODEJS, EXPRESSJS, PHP, LARAVEL, MONGODB, MYSQL', 
		]);
    }
}
