<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        $posts = [
            ['title' => 'first post'],
            ['title' => 'second post'],
            ['title' => 'third post'],
            ['title' => 'fourth post']
        ];

        return view('blog', ['posts' => $posts]);
    }
}
