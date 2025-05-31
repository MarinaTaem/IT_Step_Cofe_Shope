<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with(['user', 'coffee'])->get();
        return response()->json($ratings);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:accounts,id',
            'coffee_id' => 'required|exists:coffees,id',
            'rating_number' => 'required|integer|between:1,5',
        ]);

        // Check if user already rated this coffee
        $existingRating = Rating::where('user_id', $validated['user_id'])
                                ->where('coffee_id', $validated['coffee_id'])
                                ->first();

        if ($existingRating) {
            return response()->json(['message' => 'User already rated this coffee'], 409);
        }

        $rating = Rating::create($validated);
        return response()->json($rating->load(['user', 'coffee']), 201);
    }

    public function show(Rating $rating)
    {
        return response()->json($rating->load(['user', 'coffee']));
    }

    public function update(Request $request, Rating $rating)
    {
        $validated = $request->validate([
            'rating_number' => 'sometimes|integer|between:1,5',
        ]);

        $rating->update($validated);
        return response()->json($rating->load(['user', 'coffee']));
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();
        return response()->json(null, 204);
    }
}