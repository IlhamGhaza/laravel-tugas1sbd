<?php

namespace App\Http\Controllers;

use App\Models\courier;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        $couriers = courier::where('name', 'like', '%' . request('name') . '%')
        ->orderBy('courier_id', 'desc')
        ->paginate(10);
        return view('pages.courier.index', compact('couriers'));
    }

    public function create()
    {
        return view('pages.courier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        courier::create($request->all());

        return redirect()->route('courier.index')
                         ->with('success', 'Courier created successfully.');
    }

    public function show(courier $courier)
    {
        // return view('courier.show', compact('courier'));
    }

    public function edit(courier $courier)
    {
        return view('pages.courier.edit', compact('courier'));
    }

    public function update(Request $request, courier $courier)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        $courier->update($request->all());

        return redirect()->route('courier.index')
                         ->with('success', 'Courier updated successfully.');
    }

    public function destroy(courier $courier)
    {
        $courier->delete();

        return redirect()->route('courier.index')
                         ->with('success', 'Courier deleted successfully.');
    }
}
