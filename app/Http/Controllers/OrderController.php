<?php

namespace App\Http\Controllers;

use App\Models\Order;

use App\Models\orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = orders::where('order_date', 'like', '%' . request('date') . '%')
        ->orderBy('order_id', 'desc', 'asc')
        ->paginate(10);
        // $orders = orders::all();
        return view('pages.order.index', compact('orders'));
    }

    public function create()
    {
        return view('pages.order.create');
    }

    public function store(Request $request)
    {
        $order = orders::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show($id)
    {
        $order = orders::findOrFail($id);
        return view('pages.order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = orders::findOrFail($id);
        return view('pages.order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = orders::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $order = orders::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
