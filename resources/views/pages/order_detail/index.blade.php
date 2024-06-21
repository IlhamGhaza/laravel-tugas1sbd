<!-- resources/views/pages/order_detail/index.blade.php -->
@extends('layouts.app')

@section('title', 'Order Details')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Order Details</h1>
                {{-- <div class="section-header-button">
                    <a href="{{ route('order_details.create') }}" class="btn btn-primary">Add New Order Detail</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Order Details</a></div>
                    <div class="breadcrumb-item">All Order Details</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Order Details</h2>
                <p class="section-lead">You can manage all order details, such as editing, deleting and more.</p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Order Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="{{ route('order_details.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="product_name">
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
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach ($order_details as $order_detail)
                                            <tr>
                                                <td>{{ $order_detail->product_name }}</td>
                                                <td>{{ $order_detail->quantity }}</td>
                                                <td>{{ $order_detail->price }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('order_details.edit', $order_detail->order_detail_id) }}" class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <form action="{{ route('order_details.destroy', $order_detail->order_detail_id) }}" method="POST" class="ml-2">
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
                                    {{ $order_details->withQueryString()->links() }}
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
