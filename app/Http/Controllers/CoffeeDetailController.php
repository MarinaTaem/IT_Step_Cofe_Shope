<?php

namespace App\Http\Controllers;

use App\Models\CoffeeDetail;
use Illuminate\Http\Request;

class CoffeeDetailController extends Controller
{
    public function index()
    {
        $details = CoffeeDetail::all();
        return response()->json($details);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'short_description' => 'required|string|max:150',
            'origin' => 'required|string|max:45',
            'processing_method' => 'required|string',
            'root_level' => 'required|string|max:100',
            'price' => 'required',
        ]);

        $detail = CoffeeDetail::create($validated);
        return response()->json($detail, 201);
    }

    public function show(CoffeeDetail $coffeeDetail)
    {
        return response()->json($coffeeDetail);
    }

    public function update(Request $request, CoffeeDetail $coffeeDetail)
    {
        $validated = $request->validate([
            'short_description' => 'sometimes|string|max:150',
            'origin' => 'sometimes|string|max:45',
            'processing_method' => 'sometimes|string',
            'root_level' => 'sometimes|string|max:100',
            'price' => 'sometimes',
        ]);

        $coffeeDetail->update($validated);
        return response()->json($coffeeDetail);
    }

    public function destroy(CoffeeDetail $coffeeDetail)
    {
        $coffeeDetail->delete();
        return response()->json(null, 204);
    }
}