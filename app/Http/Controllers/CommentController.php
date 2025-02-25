<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Lesson $lesson)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        $comment = new Comment([
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);

        $lesson->comments()->save($comment);

        return back()->with('success', 'Comment posted successfully!');
    }
}
