<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();
        return view('heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $hero = new Hero();
        $request->validate([
            'title' => 'required|string|unique:heroes',
            'description' => 'required|string',
            'thumb' => 'required|url:http,https',
            'price' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);
        $hero->fill($data);
        $hero->save();
        return to_route('heroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hero = Hero::findOrFail($id);
        return view('heroes.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('heroes.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $data = $request->all();
        $hero->update($data);
        return to_route('heroes.show', $hero->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
