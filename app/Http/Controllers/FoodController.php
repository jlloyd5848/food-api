<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Food::query();
        if($request->has('name')) {
            $query->where('name', 'like','%' . $request->name . '%');
        }
        if ($request->has('barcode')) {
            $query->where('barcode', $request->barcode);
        }

        $foods = $query->get();

        return response()->json($foods);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FoodRequest $request)
    {
        $food = Food::create($request->validated());

        return response()->json($food,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = Food::findOrFail($id);

        return response()->json($food);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodRequest $request, string $id)
    {
        //

        $validatedData = $request->validated();

        $food = Food::findOrFail($id);
        $food->update($validatedData);

        return response()->json($food);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();

        return response()->json(null, 204);
    }
}
