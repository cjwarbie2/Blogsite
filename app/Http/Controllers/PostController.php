<?php

namespace App\Http\Controllers;

Use App\Providers\Post;


class  PostController extends Controller
{


  public function index()
{
  $posts = Post::get();
  return view('home', ['posts' => $posts]);
  }
}
