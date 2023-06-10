<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $posts = Posts::get();

        $data = [
            'post' => $posts
        ];
        return view('landing.index', $data);
    }
}
