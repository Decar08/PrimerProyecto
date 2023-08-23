<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        //consulta a base de datos mediante eloquent
        //$posts = Post::get();

        //trae el primer elemento
        // $post = Post::first();

        //Busca por ID
        //$post = Post::find(8);

        //Muestra de forma grafica
        //dd($post);

        $posts = Post::latest()->paginate();

        //Apunta a la vista blog y muestra la información en un array
        return view ('blog', ['posts' => $posts]);
    }

    public function post(Post $post){

        return view('post', ['post' => $post]);
    }
}