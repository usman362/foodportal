@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard - Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="text-center mt-5 b-3">
                        <h1>Congratulations Miran!</h1>
                    </div>
                    <div class="col-sm-12 text-center text-sm-left">
                        <div class="card-body  px-md-4 mb-5">
                            <div class="col"><img
                                    src="{{ asset('assets/img/illustrations/man-with-laptop-' . $configData['style'] . '.png') }}"
                                    height="300" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
