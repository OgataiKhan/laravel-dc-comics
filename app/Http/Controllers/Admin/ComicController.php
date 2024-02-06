<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());

        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->type = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request->all());

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    /**
     * Validation rules
     */
    private function validation($data) {
        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'thumb' => 'required|url',
            'price' => 'required|max:10',
            'series' => 'required|max:255',
            'type' => 'required|in:comic book,graphic novel',
        ], [
            'title.required' => 'Il titolo è richiesto.',
            'title.max' => 'Il titolo non può superare i 255 caratteri',
            'description.required' => 'Aggiungi una descrizione al fumetto.',
            'description.max' => 'La descrizione non può superare i 1000 caratteri',
            'thumb.required' => 'Inserisci una URL per l\'immagine di copertina.',
            'thumb.url' => 'Inserisci una URL valida.',
            'price.required' => 'Il prezzo è richiesto.',
            'price.max' => 'Il prezzo non può superare i 10 caratteri',
            'series.required' => 'Inserisci la serie a cui appartiene il fumetto.',
            'series.max' => 'Il nome della serie non può superare i 255 caratteri',
            'type.in' => 'Seleziona uno dei tipi possibili.',
        ])->validate();

        return $validator;
    }
}
