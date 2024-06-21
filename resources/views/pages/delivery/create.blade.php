<!-- resources/views/pages/delivery/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Delivery')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Delivery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Deliveries</a></div>
                    <div class="breadcrumb-item">Create Delivery</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create a New Delivery</h2>
                <div class="card">
                    <form action="{{ route('deliveries.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Delivery Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Order ID</label>
                                <input type="number" class="form-control @error('order_id') is-invalid @enderror" name="order_id" required>
                                @error('order_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Delivery Address</label>
                                <textarea class="form-control @error('delivery_address') is-invalid @enderror" name="delivery_address" required></textarea>
                                @error('delivery_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Delivery Date</label>
                                <input type="date" class="form-control @error('delivery_date') is-invalid @enderror" name="delivery_date" required>
                                @error('delivery_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url()->previous() }}'">Cancel</button>
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
