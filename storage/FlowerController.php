<?php

namespace App\Http\Controllers;

use App\Models\flower_arrangements;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //search by name, pagination 10
        $flower_arrangements = flower_arrangements::where('type', 'like', '%' . request('type') . '%')
        ->orderBy('arrangement_id', 'desc')
        ->paginate(10);
        return view('pages.flower.index', compact('flower_arrangements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.flower.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type' => ['required', 'string'],
            'description' => ['required', 'string'],
            'size'=> ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        flower_arrangements::create($request->all());
        return redirect()->route('flower.index')->with('success', 'Flower Created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(flower_arrangements $flower_arrangements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flower_arrangements $flower_arrangements)
    {
        //
        return view('pages.flower.edit', compact('flower_arrangements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, flower_arrangements $flower_arrangements, $id)
    {
        //
        // $request->validate([
        //     'type' => ['required', 'string'],
        //     'description' => ['required', 'string'],
        //     'size'=> ['required', 'string'],
        //     'price' => ['required', 'numeric'],
        // ]);

        $flower = flower_arrangements::find($id);
        $flower_arrangements->update($request->all());
        return redirect()->route('flower.index')->with('success', 'Flower updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flower_arrangements $flower_arrangements)
    {
        //
        $flower_arrangements->delete();
        return redirect()->route('flower.index')->with('success', 'Flower Deleted successfully');

    }
}
