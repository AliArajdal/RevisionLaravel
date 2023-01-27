<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add(Request $request){
        $comment = new Comment();
        $comment->body = $request->contenu;
        $comment->post_id = $request->post_id;
        $comment->save();
        return back();
    }
}
