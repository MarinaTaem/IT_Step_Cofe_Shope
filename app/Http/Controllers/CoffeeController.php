<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\CoffeeDetail;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index()
    {
        $coffees = Coffee::with('detail')->get();
        return view('coffee', compact('coffees')); // <--- This is the key change!
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:45',
            'detail_id' => 'required|exists:coffee_details,id',
            'url_image' => 'nullable|string',
        ]);

        $coffees = Coffee::create($validated);
        return response()->json($coffees, 201);
    }

    public function show(Coffee $coffee)
    {
        return response()->json($coffee->load('detail', 'comments', 'ratings'));
    }

    public function edit($id)
    {
        $coffee = Coffee::with('detail')->findOrFail($id);
        return view('admin.edit', compact('coffee'));
    }

    public function update(Request $request, Coffee $coffee)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:45',
            'detail_id' => 'sometimes|exists:coffee_details,id',
            'url_image' => 'nullable|string',
        ]);

        $coffee->update($validated);
        return response()->json($coffee);
    }

    public function destroy(Coffee $coffee)
    {
        $coffee->delete();
        return response()->json(null, 204);
    }

    public function dashboard()
    {
        $coffees = Coffee::with('detail')->get();
        return view('admin.show_coffee', compact('coffees'));
    }

}