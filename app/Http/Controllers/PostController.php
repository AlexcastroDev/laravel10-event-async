<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function create(Request $request, Post $post) {
        $post->fill($request->all());
        $post->save();
    }

    function index(Post $post) {
        return $post->all();
    }

    function show(Post $post) {
        return $post;
    }
}
