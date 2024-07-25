<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients, Response::HTTP_OK);
    }

    public function create()
    {
        return response()->json(['message' => 'Form for creating a client'], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required|date',
        ]);

        $client = Client::create($request->all());
        return response()->json(['message' => 'Client créé avec succès.', 'client' => $client], Response::HTTP_CREATED);
    }

    public function show(Client $client)
    {
        return response()->json($client, Response::HTTP_OK);
    }

    public function edit(Client $client)
    {
        return response()->json($client, Response::HTTP_OK);
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required|date',
        ]);

        $client->update($request->all());
        return response()->json(['message' => 'Client mis à jour avec succès.', 'client' => $client], Response::HTTP_OK);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json(['message' => 'Client supprimé avec succès.'], Response::HTTP_OK);
    }

    public function borrowedBooks($clientId)
{
    $client = Client::findOrFail($clientId);
    dd($client); // Trouve le client ou renvoie une erreur 404 si non trouvé
    $books = $client->books; // Récupère les livres empruntés par le client

    return response()->json([
        'client' => $client,
        'books' => $books
    ], Response::HTTP_OK);
}
}
