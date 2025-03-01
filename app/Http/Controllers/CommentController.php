<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Menyimpan komentar pada post tertentu
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $postId;
        $comment->save();

        return response()->json($comment, 201);
    }
}