<!-- resources/views/pages/delivery/index.blade.php -->
@extends('layouts.app')

@section('title', 'Deliveries')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Deliveries</h1>
                <div class="section-header-button">
                    <a href="{{ route('delivery.create') }}" class="btn btn-primary">Add New Delivery</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Deliveries</a></div>
                    <div class="breadcrumb-item">All Deliveries</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Deliveries</h2>
                <p class="section-lead">You can manage all deliveries, such as editing, deleting and more.</p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Deliveries</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('delivery.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="delivery_address">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Delivery Address</th>
                                            <th>Delivery Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach ($deliveries as $delivery)
                                            <tr>
                                                <td>{{ $delivery->delivery_address }}</td>
                                                <td>{{ $delivery->delivery_date }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('deliveries.edit', $delivery->delivery_id) }}" class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <form action="{{ route('deliveries.destroy', $delivery->delivery_id) }}" method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger btn-icon">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $deliveries->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
