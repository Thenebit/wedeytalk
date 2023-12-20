<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {

        $userId = Auth::id();

        $data = Post::where('user_id', $userId)->get();

        return view('pages.users.home', compact('data'));
    }

    public function create() {
        return view('pages.users.create');
    }

    public function store(Request $request) {
       
        $request->validate([
         'author' => 'required',
         'image' => 'required',
         'title' => 'required',
         'postType' => 'required',
         'description' => 'required',
      ]);

      $userId = Auth::id();

      $blog = new Post;

      $blog->user_id = $userId;
      
        if ($request->hasFile('image')) {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $imagename = time().'.'.$extention;
           $file->move('blogStorage', $imagename);

           $blog->image=$imagename;
        }

        
        $blog->author = $request->author;
        $blog->title = $request->title;
        $blog->postType = $request->postType;
        $blog->description = $request->description;

        $blog->save();

        return redirect()->back()->with('success', 'Sent success');

    }

    public function show($id) {

        $data = Post::find($id);

        return view('pages.users.show', compact('data'));
    }
}
