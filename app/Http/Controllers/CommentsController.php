<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentsController extends Controller
{
    public function getComments(Request $request) {
        $comments = Comment::where('blog_id', $request->blog_id)->where('parent_id', 0)->orderBy('id', 'asc')->offset($request->offset)->limit(5)->get();
        $count = Comment::where('blog_id', $request->blog_id)->where('parent_id', 0)->count();

        return response()->json([
                'comments' => $comments,
                'count' => $count
            ]
        );
    }

    public function setComment(Request $request) {
        $comment = new Comment;
        $comment->blog_id = $request->blog_id;
        $comment->user_id = $request->user_id;
        $comment->parent_id = $request->parent_id;
        $comment->comment = $request->comment;
        $comment->save();

        return response()->json([$comment]);
    }
}
