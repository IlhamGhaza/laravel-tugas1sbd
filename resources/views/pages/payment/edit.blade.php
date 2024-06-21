<!-- resources/views/pages/payment/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Payment')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Payment</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Payments</a></div>
                    <div class="breadcrumb-item">Edit Payment</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Payment</h2>
                <div class="card">
                    <form action="{{ route('payments.update', $payment) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Payment Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Order ID</label>
                                <select class="form-control selectric @error('order_id') is-invalid @enderror" name="order_id">
                                    @foreach($orders as $order)
                                        <option value="{{ $order->order_id }}" {{ $order->order_id == $payment->order_id ? 'selected' : '' }}>
                                            {{ $order->order_id }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('order_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $payment->amount }}" required>
                                @error('amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Payment Date</label>
                                <input type="date" class="form-control @error('payment_date') is-invalid @enderror" name="payment_date" value="{{ $payment->payment_date }}" required>
                                @error('payment_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url()->previous() }}'">Cancel</button>
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
