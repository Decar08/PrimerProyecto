<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        //consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ];
    //Apunta a la vista blog y muestra la información en un array
        return view ('blog', ['posts' => $posts]);
    }

    public function post($slug){
        //consulta a base de datos
        $post = $slug;

        return view('post', ['post' => $post]);
    }
}