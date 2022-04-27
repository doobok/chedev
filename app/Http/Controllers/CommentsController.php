<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Complain;
use App\Notifications\TelegramNewComplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class CommentsController extends Controller
{
    public function getComments(Request $request) {
        $comments = Comment::with('user')->where('blog_id', $request->blog_id)->orderBy('id', 'asc')->offset($request->offset)->limit(5)->get();
        $count = Comment::where('blog_id', $request->blog_id)->count();

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

        $new_comment = Comment::with('user')->find($comment->id);

        return response()->json([$new_comment]);
    }

    public function sendComplain(Request $request) {
        $complain = new Complain;
        $complain->user_id = $request->user_id;
        $complain->comment_id = $request->comment_id;
        $complain->complain = $request->complain;
        $complain->save();

        $comment = Comment::with('user')->find($complain->comment_id)->first();
        $user = Complain::find($complain->id)->user->name;

        Notification::send('', new TelegramNewComplain($comment->comment, $complain->complain, $comment->user->name, $user));

        return response()->json(200);

    }
}
