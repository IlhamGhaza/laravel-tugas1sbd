<?php

namespace App\Http\Controllers;

use App\Models\deliveries;
use Illuminate\Http\Request;

class DeliverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //search by name, pagination 10

       $deliveries = deliveries::where('delivery_date', 'like', '%' . request('delivery_date') . '%')
        ->orderBy('delivery_id', 'desc')
        ->paginate(10);
        return view('pages.delivery.index', compact('deliveries'));
    }

    public function create()
    {
        return view('pages.delivery.create');
    }

    public function store(Request $request)
    {
        $delivery = deliveries::create($request->all());
        return redirect()->route('delivery.index');
    }

    public function show($id)
    {
        $delivery = deliveries::findOrFail($id);
        return view('pages.delivery.show', compact('delivery'));
    }

    public function edit($id)
    {
        $delivery = deliveries::findOrFail($id);
        return view('pages.delivery.edit', compact('delivery'));
    }

    public function update(Request $request, $id)
    {
        $delivery = deliveries::findOrFail($id);
        $delivery->update($request->all());
        return redirect()->route('delivery.index');
    }

    public function destroy($id)
    {
        $delivery = deliveries::findOrFail($id);
        $delivery->delete();
        return redirect()->route('delivery.index');
    }
}
