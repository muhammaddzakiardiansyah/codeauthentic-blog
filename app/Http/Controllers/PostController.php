<?php 

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        return view('posts', [
            "title" => "Postingan Utama",
            // "posts" => post::all()
            "posts" => post::latest()->get()
        ]);
    }

    public function show(post $post) {
        return view('post', [
            "title" => "Post",
            "post" => $post
        ]);
    }
}