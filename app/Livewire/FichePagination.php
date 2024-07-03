<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiche;

class FichePagination extends Controller
{
    public function index()
    {
        $fiches = Fiche::paginate(10);
        return view('fiches.index', compact('fiches'));
    }

    // Les autres méthodes du contrôleur...
}
