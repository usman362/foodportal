@extends('layouts/layoutMaster')

@section('title', 'Deals combos')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-chat.js') }}"></script>
@endsection

@section('content')
    <div class="app-chat overflow-hidden card">
        <div class="row g-0">
            <!-- this is pos-system page!! -->
            <div class="text-center m-1 p-5">
                <h1>
                    This is Deals combos page!
                </h1>
            </div>

            <div class="app-overlay"></div>
        </div>
    </div>
@endsection
