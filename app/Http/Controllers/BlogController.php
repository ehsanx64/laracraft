<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function postIndex() {
        return view('blog/postIndex');
    }

    public function categoryIndex() {
        return view('blog/categoryIndex');
    }

    public function tagIndex() {
        return view('blog/tagIndex');
    }
}
