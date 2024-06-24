<?php
namespace App\Http\Controllers;

use App\Models\Customers;  // Ensure the model is imported correctly
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //search by name, pagination 10
        $customers = Customers::where('name', 'like', '%' . request('name') . '%')
        ->orderBy('customer_id', 'desc')
        ->paginate(10);
        return view('pages.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:Regular,Non-Regular',
        ]);

        $customer = new Customers;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->status = $request->status;

        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Customer data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customers $customer)
    {
        return view('pages.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customers $customer, $id)
    {
        //validate
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'status' => 'required|in:Regular,Non-Regular',
        ]);

        $customer = Customers::find($id);
        $customer->update($request->all());
        return redirect()->route('customer.index')->with('success', 'Customer data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer data removed');
    }
}
