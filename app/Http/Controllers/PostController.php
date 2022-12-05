<?php 

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        return view('posts', [
            "title" => "Posts",
            "posts" => post::all()
        ]);
    }

    public function show(post $post) {
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}