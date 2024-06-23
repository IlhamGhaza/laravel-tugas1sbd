<?php

namespace App\Http\Controllers;

use App\Models\order_details;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $orderDetails = order_details::where('quantity', 'like', '%' . request('type') . '%')
        ->orderBy('detail_id', 'desc', 'asc')
        ->paginate(10);
        // $orderDetails = order_details::all();
        return view('pages.order_detail.index', compact('orderDetails'));
    }

    public function create()
    {
        return view('pages.order_detail.create');
    }

    public function store(Request $request)
    {
        $orderDetail = order_details::create($request->all());
        return redirect()->route('order_detail.index');
    }

    public function show($id)
    {
        $orderDetail = order_details::findOrFail($id);
        return view('pages.order_detail.show', compact('orderDetail'));
    }

    public function edit($id)
    {
        $orderDetail = order_details::findOrFail($id);
        return view('pages.order_detail.edit', compact('orderDetail'));
    }

    public function update(Request $request, $id)
    {
        $orderDetail = order_details::findOrFail($id);
        $orderDetail->update($request->all());
        return redirect()->route('order_detail.index');
    }

    public function destroy($id)
    {
        $orderDetail = order_details::findOrFail($id);
        $orderDetail->delete();
        return redirect()->route('order_detail.index');
    }
}
