<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['user', 'coffee'])->get();
        return response()->json($comments);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:accounts,id',
            'coffee_id' => 'required|exists:coffees,id',
            'content' => 'required|string',
        ]);

        $comment = Comment::create($validated);
        return response()->json($comment->load(['user', 'coffee']), 201);
    }

    public function show(Comment $comment)
    {
        return response()->json($comment->load(['user', 'coffee']));
    }

    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'content' => 'sometimes|string',
        ]);

        $comment->update($validated);
        return response()->json($comment->load(['user', 'coffee']));
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}