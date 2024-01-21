@extends('layouts/layoutMaster')

@section('title', 'Orders Returned order')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-ecommerce-order-list.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Order /</span> Returned Order
    </h4>

    <!-- Order List Table -->
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-order table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>order</th>
                        <th>date</th>
                        <th>customers</th>
                        <th>payment</th>
                        <th>status</th>
                        <th>method</th>
                        <th>actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection
