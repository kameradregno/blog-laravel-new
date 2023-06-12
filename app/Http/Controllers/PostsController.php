<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('pemilik-postingan');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::get();

        $data = [
            'post' => $posts
        ];

        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostsRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->title);

        Posts::create($data);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data = Posts::where( 'slug', $slug )->first();
        
        return view('posts.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostsRequest $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();

        if (empty($request->image)) {
            $post->update([
                $request->all(),
                $request['slug'] = Str::slug('title')
            ]);
            return redirect("posts");
        } else {
            Storage::delete($post->image);
            $post->update([
                'title' => $request['title'],
                'content' => $request['content'],
                'slug' => $new_slug,
                'image' => $request->file('image')->store('berita')
            ]);
            return redirect("posts/$new_slug");
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post,$slug)
    {
        $data = $post->where( 'slug', $slug )->first();
        $data->delete();
        return redirect('posts');
    }
}
