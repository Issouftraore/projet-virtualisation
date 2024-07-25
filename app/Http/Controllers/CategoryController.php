<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories, Response::HTTP_OK);
    }

    public function create()
    {
        return response()->json(['message' => 'Form for creating a category'], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        $category = Category::create($request->all());
        return response()->json(['message' => 'Catégorie créée avec succès.', 'category' => $category], Response::HTTP_CREATED);
    }

    public function show(Category $category)
    {
        return response()->json($category, Response::HTTP_OK);
    }

    public function edit(Category $category)
    {
        return response()->json($category, Response::HTTP_OK);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update($request->all());
        return response()->json(['message' => 'Catégorie mise à jour avec succès.', 'category' => $category], Response::HTTP_OK);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Catégorie supprimée avec succès.'], Response::HTTP_OK);
    }
}
