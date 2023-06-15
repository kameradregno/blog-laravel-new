<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentCreateRequest;

class CommentsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function comments(CommentCreateRequest $request)
    {
        $comment = Comments::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
        ]);

        return redirect()->back()->with('success', 'Comment berhasil ditambahkan');
    }
    
}
