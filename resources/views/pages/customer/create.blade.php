@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Customer</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Customer</h2>



                <div class="card">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                is-invalid
                            @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="address"
                                    class="form-control @error('address')
                                is-invalid
                            @enderror"
                                    name="address">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        {{-- <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div> --}}
                                    </div>
                                    <input type="phone"
                                        class="form-control @error('phone')
                                is-invalid
                            @enderror"
                                        name="phone">
                                </div>
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </div> --}}

                            <div class="form-group">
                                <label class="form-label">status</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="Regular" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Regular</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="Non-Regular" class="selectgroup-input">
                                        <span class="selectgroup-button">Non-Regular</span>
                                    </label>

                                </div>
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
