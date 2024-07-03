<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiche;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;



class FicheController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données d'entrée
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        // Vérifier si le fichier existe déjà pour éviter les doublons
        $filePath = $request->file('file')->store('uploads', 'public');
        $existingFile = Fiche::where('file_path', $filePath)->first();
        if ($existingFile) {
            return back()->withErrors(['file' => 'Ce fichier existe déjà.'])->withInput();
        }

        // Créer la fiche avec l'affectation de masse
        Fiche::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'level' => $validated['level'],
            'slug' => json_encode(['title' => $validated['title'], 'category' => $validated['category']]), // Exemple pour le slug
            'description' => $validated['description'],
            'file_path' => $filePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('fiches.index')->with('success', 'Fiche créée avec succès.');
    }

    public function index()
    {
        $fiches = Fiche::paginate(10);
        return view('fiches.index', compact('fiches'));
    }

    public function show($id)
    {
        $fiche = Fiche::findOrFail($id);
        return view('fiches.show', compact('fiche'));
    }

    public function userFiches($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $fiches = Fiche::where('user_id', $user->id)->get();
        return view('fiches.user', compact('fiches', 'user'));
    }
}
