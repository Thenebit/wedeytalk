<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('pages.users.create');
    }

    public function show() {
        return view('pages.users.show');
    }
}
