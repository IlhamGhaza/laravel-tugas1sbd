<?php
// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\payments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = payments::all();
        return view('pages.payment.index', compact('payments'));
    }

    public function create()
    {
        return view('pages.payment.create');
    }

    public function store(Request $request)
    {
        $payment = payments::create($request->all());
        return redirect()->route('payment.index');
    }

    public function show($id)
    {
        $payment = payments::findOrFail($id);
        return view('pages.payment.show', compact('payment'));
    }

    public function edit($id)
    {
        $payment = payments::findOrFail($id);
        return view('pages.payment.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $payment = payments::findOrFail($id);
        $payment->update($request->all());
        return redirect()->route('payment.index');
    }

    public function destroy($id)
    {
        $payment = payments::findOrFail($id);
        $payment->delete();
        return redirect()->route('payment.index');
    }
}
