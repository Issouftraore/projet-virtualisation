<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return response()->json($books, 200);
    }

    public function create()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'datePub' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book = Book::create($request->all());
        return response()->json(['message' => 'Livre créé avec succès.', 'book' => $book], 201);
    }

    public function show(Book $book)
    {
        $book->load('category');

    // Récupérer tous les clients
    $clients = Client::all();

    // Retourner la réponse JSON avec le livre, sa catégorie, et les clients
    return response()->json(['book' => $book, 'clients' => $clients], 200);
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return response()->json(['book' => $book, 'categories' => $categories], 200);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'datePub' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($request->all());
        return response()->json(['message' => 'Livre mis à jour avec succès.', 'book' => $book], 200);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Livre supprimé avec succès.'], 200);
    }

    public function borrow(Request $request, Book $book)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
        ]);

        $client = Client::find($request->client_id);

        // Attach the client to the book
        $book->clients()->attach($client->id);

        return response()->json(['message' => 'Livre emprunté avec succès.'], 200);
    }
}
