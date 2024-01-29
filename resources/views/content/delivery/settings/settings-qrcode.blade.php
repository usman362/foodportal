@extends('layouts/layoutMaster')

@section('title', 'QR Code')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
    <link rel="stylesheet" href="{{ asset('efood/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('efood/css/theme.min.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/app-chat.js') }}"></script>
@endsection

@section('content')

    <main id="content" role="main" class="main pointer-event">

        <div class="content container-fluid">

            <div class="d-flex flex-wrap gap-2 align-items-center mb-4">
                <h2 class="h1 mb-0 d-flex align-items-center gap-2">
                    <img width="20" class="avatar-img"
                        src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/business_setup2.png"
                        alt="">
                    <span class="page-header-title">
                        Business setup
                    </span>
                </h2>
            </div>


            <div class="mt-5 mb-5">
                <div class="inline-page-menu my-4">
                    <ul class="list-unstyled">
                        <li class=""><a
                                href="javascript:void(0)">Business
                                Settings</a></li>
                        <li class=""><a
                                href="javascript:void(0)">Main
                                Branch Setup</a></li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Restaurant
                                Availabilty Time Slot</a></li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Delivery
                                Fee Setup</a></li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Cookies
                                Setup</a></li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Login
                                and OTP Setup</a></li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Customers
                              </a>
                        </li>
                        <li class=""><a
                                href="javascript:void(0)">
                                Orders
                              </a>
                        </li>
                        <li class="active"><a
                                href="javascript:void(0)">QR
                                Code</a></li>
                    </ul>
                </div>
            </div>
            <section class="qr-code-section">
                <div class="card">
                    <div class="card-body">
                        <div class="qr-area">
                            <div class="left-side pr-xl-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="text-dark w-0 flex-grow-1">QR Card Design</div>
                                    <div class="btn--container flex-nowrap print-btn-grp">
                                        <a type="button"
                                            href="javascript:void(0)"
                                            class="btn btn-primary pt-1"><i class="tio-print"></i> Print</a>
                                    </div>
                                </div>
                                <div class="qr-wrapper"
                                    style="background: url(https://efood-admin.6amtech.com/public/assets/admin/img/qr-bg.png) no-repeat center center / 100% 100%">
                                    <a href="" class="qr-logo">
                                        <img src="https://efood-admin.6amtech.com/storage/app/public/qrcode/2023-09-11-64fecb7bd58ff.png"
                                            class="mw-100"
                                            onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/logo2.png'"
                                            alt="">
                                    </a>
                                    <a class="view-menu" href="">
                                        Efood
                                    </a>
                                    <div class="text-center mt-4">
                                        <div>
                                            <img src="https://efood-admin.6amtech.com/public/assets/admin/img/scan-me.png"
                                                class="mw-100" alt="">
                                        </div>
                                        <div class="my-3">

                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180"
                                                height="180" viewBox="0 0 180 180">
                                                <rect x="0" y="0" width="180" height="180" fill="#ffffff"></rect>
                                                <g transform="scale(2.466)">
                                                    <g transform="translate(0,0)">
                                                        <path fill-rule="evenodd"
                                                            d="M10 0L10 1L8 1L8 2L9 2L9 3L8 3L8 4L11 4L11 3L13 3L13 2L12 2L12 1L11 1L11 0ZM14 0L14 3L15 3L15 1L17 1L17 4L15 4L15 5L14 5L14 7L13 7L13 5L10 5L10 7L9 7L9 5L8 5L8 7L9 7L9 8L6 8L6 9L9 9L9 10L10 10L10 14L8 14L8 13L9 13L9 12L8 12L8 11L7 11L7 10L6 10L6 11L5 11L5 12L4 12L4 13L7 13L7 14L6 14L6 15L8 15L8 16L9 16L9 17L7 17L7 16L6 16L6 17L7 17L7 18L5 18L5 16L4 16L4 17L3 17L3 12L2 12L2 14L1 14L1 12L0 12L0 15L2 15L2 16L0 16L0 17L1 17L1 19L0 19L0 20L3 20L3 21L5 21L5 22L6 22L6 23L4 23L4 25L2 25L2 26L3 26L3 27L4 27L4 28L3 28L3 29L2 29L2 27L1 27L1 26L0 26L0 27L1 27L1 29L0 29L0 30L1 30L1 29L2 29L2 30L3 30L3 29L7 29L7 30L4 30L4 31L2 31L2 32L1 32L1 34L2 34L2 35L0 35L0 36L2 36L2 37L3 37L3 38L2 38L2 39L3 39L3 40L2 40L2 41L0 41L0 47L2 47L2 48L3 48L3 49L0 49L0 50L2 50L2 51L0 51L0 52L1 52L1 53L0 53L0 56L1 56L1 57L0 57L0 58L1 58L1 59L0 59L0 63L2 63L2 62L3 62L3 64L4 64L4 65L5 65L5 63L7 63L7 64L6 64L6 65L8 65L8 67L9 67L9 68L8 68L8 73L9 73L9 71L10 71L10 72L11 72L11 71L12 71L12 73L13 73L13 71L14 71L14 72L15 72L15 73L16 73L16 72L17 72L17 70L15 70L15 71L14 71L14 69L12 69L12 70L9 70L9 68L10 68L10 67L11 67L11 68L13 68L13 66L12 66L12 65L14 65L14 66L15 66L15 65L16 65L16 64L17 64L17 63L18 63L18 64L19 64L19 65L17 65L17 66L16 66L16 67L15 67L15 68L17 68L17 69L20 69L20 70L18 70L18 72L20 72L20 73L22 73L22 72L24 72L24 73L26 73L26 71L27 71L27 72L29 72L29 73L32 73L32 72L35 72L35 73L38 73L38 72L35 72L35 71L34 71L34 70L33 70L33 69L37 69L37 70L36 70L36 71L39 71L39 72L40 72L40 71L41 71L41 73L43 73L43 72L42 72L42 71L43 71L43 70L44 70L44 71L45 71L45 72L46 72L46 73L47 73L47 72L48 72L48 71L50 71L50 73L54 73L54 72L56 72L56 73L59 73L59 72L60 72L60 71L61 71L61 68L63 68L63 69L62 69L62 71L63 71L63 72L65 72L65 73L66 73L66 71L67 71L67 69L68 69L68 70L69 70L69 71L68 71L68 73L69 73L69 72L70 72L70 73L73 73L73 69L72 69L72 68L70 68L70 69L69 69L69 67L71 67L71 66L72 66L72 67L73 67L73 66L72 66L72 65L71 65L71 66L70 66L70 65L69 65L69 62L68 62L68 61L69 61L69 60L70 60L70 62L71 62L71 63L73 63L73 62L71 62L71 60L72 60L72 61L73 61L73 58L70 58L70 57L71 57L71 56L72 56L72 57L73 57L73 55L71 55L71 54L72 54L72 53L73 53L73 52L72 52L72 53L69 53L69 50L70 50L70 51L73 51L73 45L71 45L71 44L70 44L70 45L69 45L69 43L70 43L70 41L69 41L69 42L68 42L68 41L67 41L67 40L69 40L69 39L70 39L70 38L71 38L71 39L72 39L72 40L71 40L71 43L73 43L73 38L71 38L71 36L70 36L70 34L71 34L71 35L73 35L73 34L71 34L71 33L73 33L73 32L72 32L72 31L73 31L73 30L72 30L72 29L71 29L71 28L73 28L73 25L71 25L71 24L68 24L68 23L72 23L72 24L73 24L73 22L72 22L72 21L71 21L71 22L70 22L70 21L69 21L69 22L68 22L68 19L71 19L71 20L72 20L72 19L73 19L73 14L71 14L71 12L70 12L70 14L69 14L69 15L71 15L71 17L70 17L70 18L68 18L68 17L69 17L69 16L68 16L68 8L67 8L67 9L66 9L66 8L65 8L65 6L64 6L64 9L63 9L63 5L65 5L65 4L64 4L64 3L62 3L62 4L60 4L60 5L59 5L59 6L58 6L58 8L57 8L57 6L56 6L56 4L57 4L57 5L58 5L58 4L57 4L57 3L58 3L58 2L59 2L59 3L61 3L61 2L60 2L60 0L59 0L59 1L58 1L58 0L55 0L55 2L54 2L54 1L52 1L52 0L50 0L50 2L49 2L49 0L48 0L48 1L45 1L45 0L44 0L44 1L43 1L43 0L40 0L40 2L39 2L39 1L38 1L38 0L36 0L36 1L34 1L34 0L32 0L32 1L34 1L34 2L35 2L35 3L33 3L33 2L31 2L31 0L29 0L29 3L30 3L30 4L28 4L28 2L27 2L27 0L26 0L26 3L25 3L25 1L24 1L24 2L23 2L23 1L21 1L21 0L20 0L20 1L19 1L19 0ZM61 0L61 1L62 1L62 2L63 2L63 0ZM64 0L64 1L65 1L65 0ZM18 1L18 3L21 3L21 1L20 1L20 2L19 2L19 1ZM36 1L36 3L37 3L37 4L38 4L38 5L35 5L35 4L33 4L33 3L32 3L32 4L31 4L31 5L35 5L35 7L36 7L36 8L37 8L37 9L38 9L38 10L35 10L35 8L34 8L34 9L33 9L33 8L32 8L32 6L31 6L31 8L30 8L30 5L29 5L29 9L26 9L26 10L27 10L27 12L28 12L28 14L27 14L27 13L25 13L25 14L23 14L23 13L21 13L21 12L19 12L19 13L18 13L18 12L17 12L17 11L16 11L16 10L18 10L18 11L20 11L20 8L19 8L19 9L18 9L18 8L16 8L16 6L15 6L15 7L14 7L14 8L16 8L16 10L15 10L15 9L13 9L13 11L12 11L12 6L11 6L11 8L9 8L9 9L10 9L10 10L11 10L11 12L12 12L12 13L16 13L16 14L17 14L17 13L18 13L18 14L19 14L19 16L18 16L18 15L15 15L15 14L14 14L14 15L13 15L13 14L12 14L12 15L13 15L13 16L12 16L12 17L11 17L11 16L10 16L10 18L11 18L11 19L10 19L10 20L9 20L9 21L8 21L8 20L7 20L7 19L6 19L6 20L7 20L7 21L6 21L6 22L7 22L7 23L6 23L6 24L7 24L7 23L8 23L8 22L9 22L9 21L10 21L10 22L11 22L11 23L12 23L12 24L14 24L14 25L15 25L15 22L16 22L16 21L17 21L17 23L16 23L16 24L17 24L17 26L15 26L15 28L14 28L14 27L12 27L12 29L13 29L13 30L11 30L11 28L10 28L10 27L9 27L9 28L10 28L10 31L9 31L9 32L8 32L8 30L9 30L9 29L8 29L8 30L7 30L7 31L5 31L5 32L4 32L4 34L5 34L5 35L3 35L3 37L5 37L5 38L4 38L4 40L5 40L5 43L3 43L3 42L4 42L4 41L2 41L2 43L1 43L1 44L2 44L2 45L1 45L1 46L4 46L4 45L3 45L3 44L9 44L9 45L11 45L11 43L14 43L14 42L13 42L13 41L15 41L15 42L16 42L16 43L18 43L18 44L12 44L12 45L13 45L13 46L12 46L12 47L11 47L11 48L10 48L10 49L11 49L11 48L12 48L12 47L13 47L13 48L16 48L16 49L18 49L18 50L17 50L17 51L14 51L14 52L13 52L13 51L12 51L12 50L13 50L13 49L12 49L12 50L10 50L10 51L6 51L6 50L7 50L7 49L4 49L4 50L5 50L5 51L4 51L4 52L2 52L2 55L1 55L1 56L3 56L3 60L1 60L1 62L2 62L2 61L3 61L3 62L4 62L4 63L5 63L5 62L4 62L4 56L5 56L5 57L6 57L6 58L5 58L5 60L11 60L11 63L10 63L10 61L9 61L9 62L8 62L8 61L6 61L6 62L8 62L8 63L10 63L10 64L9 64L9 65L10 65L10 66L11 66L11 67L12 67L12 66L11 66L11 65L12 65L12 64L11 64L11 63L13 63L13 64L14 64L14 65L15 65L15 64L14 64L14 62L12 62L12 60L13 60L13 61L14 61L14 60L13 60L13 59L12 59L12 58L14 58L14 57L15 57L15 56L17 56L17 57L16 57L16 58L15 58L15 60L17 60L17 61L18 61L18 63L19 63L19 61L20 61L20 62L21 62L21 63L22 63L22 64L23 64L23 65L21 65L21 64L20 64L20 65L19 65L19 66L18 66L18 68L21 68L21 66L23 66L23 67L22 67L22 68L23 68L23 69L22 69L22 70L23 70L23 71L24 71L24 70L23 70L23 69L24 69L24 68L23 68L23 67L24 67L24 64L26 64L26 63L27 63L27 64L29 64L29 65L31 65L31 64L30 64L30 63L31 63L31 62L32 62L32 61L33 61L33 62L34 62L34 63L36 63L36 64L37 64L37 63L36 63L36 62L39 62L39 61L43 61L43 60L39 60L39 59L44 59L44 60L45 60L45 61L46 61L46 62L47 62L47 64L48 64L48 63L50 63L50 64L49 64L49 68L50 68L50 69L49 69L49 70L51 70L51 72L52 72L52 71L53 71L53 72L54 72L54 71L55 71L55 70L56 70L56 72L58 72L58 71L57 71L57 70L56 70L56 68L55 68L55 67L57 67L57 68L58 68L58 69L60 69L60 68L61 68L61 67L62 67L62 65L61 65L61 63L62 63L62 62L63 62L63 61L65 61L65 63L64 63L64 64L63 64L63 65L64 65L64 64L68 64L68 62L67 62L67 61L68 61L68 60L69 60L69 59L70 59L70 60L71 60L71 59L70 59L70 58L69 58L69 57L70 57L70 56L71 56L71 55L70 55L70 56L69 56L69 57L68 57L68 55L69 55L69 53L68 53L68 55L67 55L67 53L65 53L65 51L64 51L64 52L63 52L63 51L62 51L62 49L61 49L61 48L62 48L62 45L64 45L64 44L65 44L65 43L64 43L64 42L66 42L66 40L65 40L65 38L67 38L67 39L69 39L69 38L70 38L70 36L69 36L69 35L68 35L68 34L69 34L69 32L71 32L71 31L72 31L72 30L71 30L71 29L70 29L70 28L71 28L71 25L69 25L69 26L70 26L70 27L69 27L69 30L70 30L70 31L69 31L69 32L68 32L68 31L67 31L67 30L64 30L64 31L62 31L62 32L64 32L64 33L63 33L63 38L62 38L62 37L61 37L61 38L62 38L62 39L63 39L63 41L60 41L60 40L61 40L61 39L60 39L60 40L57 40L57 41L56 41L56 40L54 40L54 39L56 39L56 38L57 38L57 39L58 39L58 38L59 38L59 37L60 37L60 36L62 36L62 35L61 35L61 34L62 34L62 33L61 33L61 31L58 31L58 30L55 30L55 29L57 29L57 28L58 28L58 29L60 29L60 28L61 28L61 30L63 30L63 28L64 28L64 27L63 27L63 26L64 26L64 25L63 25L63 24L65 24L65 23L66 23L66 24L67 24L67 23L68 23L68 22L67 22L67 21L66 21L66 20L67 20L67 19L64 19L64 18L63 18L63 17L64 17L64 16L67 16L67 15L65 15L65 14L63 14L63 12L67 12L67 11L62 11L62 13L61 13L61 14L62 14L62 15L64 15L64 16L62 16L62 17L61 17L61 15L60 15L60 16L59 16L59 15L58 15L58 16L55 16L55 17L54 17L54 16L52 16L52 18L51 18L51 19L50 19L50 17L49 17L49 16L51 16L51 15L52 15L52 14L54 14L54 15L57 15L57 13L58 13L58 14L59 14L59 13L60 13L60 12L61 12L61 11L60 11L60 10L59 10L59 9L61 9L61 10L62 10L62 5L63 5L63 4L62 4L62 5L61 5L61 7L60 7L60 6L59 6L59 7L60 7L60 8L58 8L58 10L57 10L57 11L58 11L58 12L56 12L56 11L55 11L55 10L56 10L56 8L55 8L55 7L56 7L56 6L55 6L55 4L56 4L56 2L57 2L57 1L56 1L56 2L55 2L55 3L54 3L54 2L52 2L52 1L51 1L51 3L50 3L50 4L49 4L49 2L44 2L44 4L43 4L43 3L42 3L42 2L43 2L43 1L42 1L42 2L41 2L41 3L39 3L39 2L38 2L38 1ZM22 2L22 3L23 3L23 4L22 4L22 5L23 5L23 8L22 8L22 9L23 9L23 10L21 10L21 11L22 11L22 12L26 12L26 11L25 11L25 9L23 9L23 8L24 8L24 4L25 4L25 3L23 3L23 2ZM37 2L37 3L38 3L38 4L39 4L39 3L38 3L38 2ZM26 3L26 4L27 4L27 3ZM41 3L41 5L43 5L43 6L42 6L42 7L43 7L43 8L41 8L41 6L40 6L40 7L39 7L39 5L38 5L38 8L41 8L41 9L39 9L39 10L38 10L38 12L36 12L36 11L35 11L35 12L34 12L34 13L37 13L37 14L38 14L38 12L39 12L39 11L40 11L40 10L42 10L42 11L43 11L43 13L39 13L39 16L41 16L41 15L40 15L40 14L45 14L45 15L46 15L46 14L47 14L47 17L46 17L46 16L45 16L45 17L46 17L46 18L45 18L45 19L44 19L44 18L43 18L43 17L44 17L44 16L43 16L43 15L42 15L42 17L39 17L39 19L38 19L38 20L34 20L34 19L35 19L35 18L36 18L36 19L37 19L37 18L38 18L38 17L37 17L37 16L38 16L38 15L36 15L36 14L33 14L33 15L32 15L32 14L31 14L31 13L32 13L32 12L33 12L33 11L34 11L34 10L33 10L33 9L32 9L32 8L31 8L31 9L29 9L29 10L28 10L28 11L29 11L29 15L27 15L27 14L25 14L25 15L23 15L23 14L21 14L21 13L20 13L20 14L21 14L21 15L23 15L23 17L22 17L22 16L20 16L20 17L22 17L22 18L24 18L24 16L25 16L25 17L26 17L26 18L25 18L25 19L24 19L24 20L25 20L25 21L21 21L21 20L20 20L20 19L18 19L18 20L20 20L20 22L19 22L19 21L18 21L18 22L19 22L19 23L20 23L20 22L25 22L25 21L26 21L26 20L25 20L25 19L28 19L28 21L27 21L27 22L26 22L26 24L24 24L24 25L23 25L23 23L21 23L21 24L19 24L19 25L21 25L21 27L22 27L22 28L20 28L20 29L19 29L19 27L20 27L20 26L18 26L18 27L17 27L17 28L18 28L18 29L19 29L19 30L17 30L17 29L16 29L16 28L15 28L15 29L14 29L14 28L13 28L13 29L14 29L14 30L13 30L13 31L12 31L12 32L11 32L11 31L10 31L10 32L11 32L11 33L10 33L10 35L9 35L9 34L8 34L8 35L9 35L9 36L8 36L8 37L7 37L7 36L5 36L5 37L7 37L7 38L5 38L5 40L6 40L6 41L7 41L7 42L6 42L6 43L7 43L7 42L9 42L9 44L10 44L10 43L11 43L11 40L12 40L12 41L13 41L13 40L12 40L12 39L11 39L11 38L8 38L8 37L11 37L11 36L13 36L13 35L14 35L14 37L13 37L13 38L15 38L15 39L14 39L14 40L15 40L15 41L16 41L16 39L17 39L17 40L18 40L18 41L17 41L17 42L18 42L18 43L19 43L19 44L21 44L21 45L20 45L20 46L21 46L21 47L20 47L20 48L19 48L19 47L16 47L16 48L19 48L19 49L20 49L20 50L22 50L22 52L23 52L23 53L21 53L21 52L20 52L20 51L19 51L19 50L18 50L18 52L20 52L20 54L21 54L21 56L20 56L20 55L18 55L18 54L19 54L19 53L18 53L18 54L17 54L17 52L16 52L16 53L15 53L15 52L14 52L14 55L13 55L13 52L12 52L12 51L10 51L10 52L6 52L6 51L5 51L5 52L6 52L6 53L7 53L7 54L4 54L4 53L3 53L3 54L4 54L4 55L5 55L5 56L6 56L6 57L8 57L8 56L11 56L11 57L10 57L10 58L6 58L6 59L10 59L10 58L12 58L12 55L13 55L13 57L14 57L14 56L15 56L15 55L18 55L18 56L19 56L19 57L22 57L22 58L17 58L17 59L18 59L18 60L20 60L20 61L22 61L22 62L23 62L23 63L26 63L26 62L27 62L27 63L30 63L30 62L31 62L31 61L32 61L32 60L34 60L34 61L37 61L37 59L38 59L38 57L39 57L39 58L44 58L44 59L46 59L46 60L47 60L47 61L48 61L48 60L47 60L47 57L48 57L48 58L49 58L49 59L51 59L51 57L52 57L52 58L53 58L53 59L52 59L52 60L51 60L51 61L50 61L50 60L49 60L49 61L50 61L50 63L51 63L51 65L50 65L50 68L51 68L51 69L52 69L52 68L53 68L53 69L54 69L54 68L53 68L53 67L51 67L51 66L52 66L52 65L54 65L54 66L55 66L55 65L54 65L54 64L53 64L53 60L54 60L54 61L55 61L55 62L58 62L58 63L55 63L55 64L56 64L56 66L58 66L58 65L57 65L57 64L58 64L58 63L61 63L61 62L58 62L58 61L59 61L59 60L58 60L58 59L61 59L61 60L60 60L60 61L61 61L61 60L62 60L62 59L63 59L63 60L64 60L64 59L65 59L65 61L67 61L67 60L66 60L66 58L59 58L59 56L60 56L60 55L59 55L59 54L61 54L61 55L63 55L63 56L61 56L61 57L67 57L67 58L68 58L68 57L67 57L67 55L66 55L66 54L65 54L65 55L64 55L64 54L61 54L61 53L59 53L59 54L58 54L58 52L59 52L59 51L60 51L60 50L61 50L61 49L60 49L60 50L59 50L59 51L57 51L57 50L58 50L58 49L56 49L56 50L55 50L55 49L54 49L54 50L55 50L55 51L54 51L54 53L55 53L55 54L56 54L56 55L55 55L55 56L56 56L56 57L55 57L55 59L54 59L54 58L53 58L53 47L54 47L54 48L55 48L55 47L56 47L56 48L60 48L60 47L59 47L59 46L61 46L61 45L57 45L57 47L56 47L56 46L55 46L55 47L54 47L54 46L53 46L53 47L51 47L51 46L52 46L52 45L54 45L54 44L57 44L57 43L54 43L54 42L55 42L55 41L54 41L54 42L53 42L53 43L52 43L52 42L48 42L48 41L47 41L47 40L49 40L49 41L50 41L50 40L49 40L49 39L47 39L47 37L45 37L45 36L46 36L46 35L47 35L47 36L48 36L48 37L49 37L49 35L52 35L52 36L50 36L50 37L52 37L52 38L50 38L50 39L52 39L52 40L51 40L51 41L52 41L52 40L53 40L53 39L54 39L54 38L53 38L53 37L55 37L55 38L56 38L56 37L55 37L55 36L56 36L56 35L57 35L57 34L58 34L58 35L59 35L59 34L61 34L61 33L59 33L59 32L58 32L58 33L57 33L57 31L55 31L55 32L56 32L56 33L57 33L57 34L55 34L55 35L53 35L53 33L52 33L52 32L54 32L54 30L53 30L53 28L54 28L54 29L55 29L55 28L57 28L57 27L55 27L55 28L54 28L54 26L53 26L53 27L52 27L52 28L51 28L51 26L52 26L52 25L53 25L53 24L51 24L51 25L50 25L50 24L46 24L46 23L47 23L47 22L46 22L46 23L44 23L44 22L43 22L43 21L46 21L46 20L45 20L45 19L46 19L46 18L47 18L47 17L48 17L48 15L49 15L49 13L50 13L50 15L51 15L51 14L52 14L52 13L53 13L53 12L54 12L54 13L55 13L55 14L56 14L56 13L55 13L55 11L54 11L54 10L53 10L53 9L55 9L55 8L53 8L53 5L52 5L52 4L54 4L54 3L51 3L51 5L49 5L49 4L48 4L48 3L45 3L45 4L44 4L44 5L43 5L43 4L42 4L42 3ZM17 4L17 5L20 5L20 6L19 6L19 7L20 7L20 6L21 6L21 7L22 7L22 6L21 6L21 4ZM25 5L25 8L28 8L28 5ZM45 5L45 8L48 8L48 5ZM51 5L51 7L50 7L50 6L49 6L49 8L50 8L50 9L47 9L47 10L46 10L46 13L45 13L45 10L44 10L44 13L45 13L45 14L46 14L46 13L47 13L47 14L48 14L48 13L49 13L49 12L50 12L50 13L51 13L51 11L53 11L53 10L51 10L51 11L48 11L48 10L50 10L50 9L51 9L51 8L52 8L52 5ZM17 6L17 7L18 7L18 6ZM26 6L26 7L27 7L27 6ZM33 6L33 7L34 7L34 6ZM36 6L36 7L37 7L37 6ZM43 6L43 7L44 7L44 6ZM46 6L46 7L47 7L47 6ZM54 6L54 7L55 7L55 6ZM0 8L0 11L4 11L4 10L5 10L5 8ZM43 8L43 9L44 9L44 8ZM69 8L69 9L70 9L70 8ZM71 8L71 11L72 11L72 12L73 12L73 9L72 9L72 8ZM1 9L1 10L2 10L2 9ZM31 9L31 10L30 10L30 11L31 11L31 12L32 12L32 11L31 11L31 10L32 10L32 9ZM23 10L23 11L24 11L24 10ZM69 10L69 11L70 11L70 10ZM6 11L6 12L7 12L7 11ZM14 11L14 12L16 12L16 11ZM59 11L59 12L58 12L58 13L59 13L59 12L60 12L60 11ZM47 12L47 13L48 13L48 12ZM66 13L66 14L67 14L67 13ZM10 14L10 15L11 15L11 14ZM26 15L26 17L27 17L27 18L28 18L28 19L29 19L29 17L27 17L27 15ZM29 15L29 16L30 16L30 15ZM34 15L34 16L31 16L31 18L30 18L30 19L31 19L31 20L30 20L30 21L31 21L31 20L32 20L32 22L33 22L33 23L35 23L35 24L32 24L32 23L28 23L28 22L29 22L29 21L28 21L28 22L27 22L27 24L32 24L32 26L31 26L31 27L30 27L30 26L29 26L29 30L28 30L28 29L26 29L26 30L25 30L25 32L26 32L26 33L25 33L25 34L26 34L26 35L25 35L25 36L24 36L24 35L22 35L22 36L23 36L23 37L22 37L22 38L23 38L23 40L22 40L22 41L24 41L24 39L25 39L25 40L26 40L26 42L25 42L25 43L23 43L23 42L21 42L21 41L20 41L20 40L19 40L19 39L20 39L20 38L21 38L21 37L20 37L20 36L21 36L21 35L20 35L20 34L22 34L22 33L20 33L20 32L19 32L19 33L18 33L18 31L17 31L17 30L16 30L16 32L15 32L15 34L14 34L14 33L13 33L13 32L14 32L14 31L13 31L13 32L12 32L12 33L11 33L11 34L12 34L12 35L13 35L13 34L14 34L14 35L16 35L16 37L15 37L15 38L16 38L16 37L17 37L17 38L19 38L19 39L18 39L18 40L19 40L19 41L18 41L18 42L20 42L20 43L23 43L23 46L22 46L22 47L23 47L23 48L24 48L24 47L23 47L23 46L24 46L24 44L26 44L26 42L27 42L27 44L30 44L30 43L31 43L31 44L32 44L32 46L33 46L33 48L32 48L32 49L31 49L31 50L30 50L30 48L29 48L29 49L28 49L28 51L27 51L27 49L23 49L23 50L26 50L26 51L23 51L23 52L26 52L26 51L27 51L27 52L29 52L29 53L31 53L31 54L28 54L28 55L25 55L25 54L26 54L26 53L24 53L24 55L23 55L23 54L22 54L22 55L23 55L23 58L24 58L24 56L27 56L27 57L26 57L26 59L27 59L27 60L32 60L32 59L33 59L33 58L35 58L35 59L34 59L34 60L36 60L36 59L37 59L37 58L35 58L35 57L34 57L34 56L36 56L36 54L40 54L40 55L38 55L38 56L39 56L39 57L41 57L41 56L42 56L42 57L45 57L45 58L46 58L46 56L48 56L48 57L49 57L49 58L50 58L50 54L52 54L52 53L51 53L51 52L48 52L48 51L47 51L47 50L49 50L49 51L50 51L50 50L52 50L52 49L51 49L51 47L50 47L50 48L49 48L49 49L47 49L47 50L46 50L46 49L44 49L44 48L42 48L42 49L44 49L44 50L46 50L46 51L44 51L44 52L45 52L45 53L44 53L44 56L42 56L42 55L43 55L43 54L40 54L40 53L42 53L42 52L43 52L43 51L42 51L42 52L41 52L41 51L40 51L40 49L41 49L41 48L39 48L39 47L38 47L38 46L39 46L39 45L40 45L40 46L41 46L41 44L43 44L43 43L45 43L45 44L47 44L47 43L48 43L48 42L47 42L47 41L46 41L46 42L44 42L44 40L45 40L45 39L46 39L46 40L47 40L47 39L46 39L46 38L44 38L44 37L43 37L43 36L45 36L45 35L43 35L43 36L42 36L42 34L41 34L41 33L42 33L42 32L41 32L41 31L40 31L40 32L38 32L38 31L39 31L39 30L42 30L42 31L44 31L44 32L45 32L45 33L43 33L43 34L45 34L45 33L47 33L47 31L48 31L48 34L47 34L47 35L49 35L49 34L52 34L52 33L49 33L49 32L50 32L50 31L49 31L49 30L51 30L51 32L52 32L52 31L53 31L53 30L52 30L52 29L51 29L51 28L50 28L50 29L48 29L48 30L47 30L47 31L46 31L46 30L45 30L45 31L44 31L44 29L43 29L43 30L42 30L42 29L41 29L41 28L40 28L40 27L38 27L38 26L41 26L41 27L42 27L42 28L43 28L43 27L44 27L44 26L41 26L41 25L44 25L44 23L43 23L43 22L42 22L42 20L41 20L41 19L43 19L43 20L44 20L44 19L43 19L43 18L41 18L41 19L39 19L39 20L38 20L38 22L35 22L35 21L33 21L33 20L32 20L32 19L34 19L34 18L35 18L35 16L36 16L36 15ZM15 16L15 17L17 17L17 18L18 18L18 17L17 17L17 16ZM32 17L32 18L33 18L33 17ZM36 17L36 18L37 18L37 17ZM55 17L55 19L54 19L54 20L53 20L53 18L52 18L52 19L51 19L51 20L50 20L50 19L49 19L49 18L48 18L48 19L47 19L47 21L48 21L48 23L51 23L51 21L52 21L52 20L53 20L53 21L54 21L54 22L53 22L53 23L54 23L54 25L55 25L55 26L56 26L56 25L55 25L55 24L56 24L56 22L55 22L55 21L54 21L54 20L56 20L56 21L57 21L57 23L59 23L59 24L58 24L58 25L57 25L57 26L58 26L58 27L59 27L59 28L60 28L60 27L59 27L59 26L58 26L58 25L59 25L59 24L60 24L60 23L61 23L61 21L62 21L62 19L63 19L63 20L64 20L64 21L63 21L63 22L62 22L62 24L61 24L61 25L62 25L62 24L63 24L63 22L64 22L64 21L65 21L65 22L66 22L66 23L67 23L67 22L66 22L66 21L65 21L65 20L64 20L64 19L63 19L63 18L61 18L61 17L60 17L60 18L58 18L58 17L57 17L57 18L58 18L58 19L56 19L56 17ZM71 17L71 18L72 18L72 17ZM2 18L2 19L3 19L3 18ZM8 18L8 19L9 19L9 18ZM12 18L12 20L14 20L14 18ZM15 18L15 21L14 21L14 22L15 22L15 21L16 21L16 20L17 20L17 19L16 19L16 18ZM4 19L4 20L5 20L5 19ZM22 19L22 20L23 20L23 19ZM58 19L58 20L57 20L57 21L58 21L58 22L59 22L59 23L60 23L60 22L59 22L59 21L61 21L61 19ZM48 20L48 21L49 21L49 22L50 22L50 21L49 21L49 20ZM0 21L0 22L2 22L2 23L3 23L3 22L2 22L2 21ZM12 21L12 23L13 23L13 21ZM39 21L39 22L38 22L38 23L36 23L36 24L35 24L35 26L32 26L32 27L31 27L31 29L30 29L30 30L29 30L29 32L27 32L27 33L28 33L28 34L27 34L27 35L26 35L26 37L23 37L23 38L26 38L26 37L27 37L27 38L28 38L28 37L29 37L29 38L31 38L31 37L32 37L32 38L33 38L33 37L36 37L36 38L34 38L34 39L31 39L31 40L27 40L27 39L26 39L26 40L27 40L27 41L30 41L30 42L29 42L29 43L30 43L30 42L31 42L31 43L32 43L32 42L33 42L33 41L31 41L31 40L35 40L35 42L34 42L34 43L33 43L33 46L34 46L34 47L35 47L35 48L33 48L33 49L32 49L32 52L31 52L31 53L32 53L32 52L33 52L33 49L37 49L37 51L39 51L39 52L38 52L38 53L39 53L39 52L40 52L40 51L39 51L39 50L38 50L38 49L39 49L39 48L38 48L38 49L37 49L37 48L36 48L36 46L38 46L38 45L37 45L37 44L38 44L38 40L35 40L35 39L36 39L36 38L37 38L37 39L40 39L40 38L42 38L42 39L43 39L43 40L41 40L41 42L43 42L43 40L44 40L44 39L43 39L43 37L42 37L42 36L41 36L41 37L39 37L39 36L38 36L38 37L39 37L39 38L37 38L37 35L38 35L38 33L37 33L37 32L34 32L34 33L36 33L36 36L33 36L33 35L32 35L32 34L33 34L33 33L32 33L32 32L33 32L33 31L36 31L36 30L38 30L38 29L40 29L40 28L38 28L38 29L37 29L37 27L36 27L36 28L35 28L35 26L38 26L38 25L40 25L40 24L41 24L41 23L42 23L42 22L41 22L41 21ZM40 22L40 23L38 23L38 24L37 24L37 25L38 25L38 24L40 24L40 23L41 23L41 22ZM54 22L54 23L55 23L55 22ZM17 23L17 24L18 24L18 23ZM0 24L0 25L1 25L1 24ZM10 24L10 26L11 26L11 24ZM5 25L5 28L8 28L8 25ZM12 25L12 26L13 26L13 25ZM25 25L25 28L28 28L28 25ZM45 25L45 28L48 28L48 25ZM49 25L49 26L50 26L50 25ZM65 25L65 28L68 28L68 25ZM6 26L6 27L7 27L7 26ZM26 26L26 27L27 27L27 26ZM46 26L46 27L47 27L47 26ZM61 26L61 27L62 27L62 26ZM66 26L66 27L67 27L67 26ZM23 27L23 28L22 28L22 29L23 29L23 28L24 28L24 27ZM32 28L32 29L31 29L31 30L30 30L30 31L31 31L31 32L32 32L32 31L33 31L33 30L35 30L35 28ZM20 29L20 30L21 30L21 29ZM32 29L32 30L31 30L31 31L32 31L32 30L33 30L33 29ZM22 30L22 31L21 31L21 32L22 32L22 31L24 31L24 30ZM26 30L26 31L27 31L27 30ZM45 31L45 32L46 32L46 31ZM65 31L65 32L67 32L67 33L66 33L66 34L68 34L68 32L67 32L67 31ZM2 32L2 33L3 33L3 32ZM6 32L6 33L7 33L7 32ZM29 32L29 33L30 33L30 32ZM12 33L12 34L13 34L13 33ZM17 33L17 37L19 37L19 36L18 36L18 35L19 35L19 34L18 34L18 33ZM23 33L23 34L24 34L24 33ZM31 33L31 34L28 34L28 35L31 35L31 36L29 36L29 37L31 37L31 36L32 36L32 37L33 37L33 36L32 36L32 35L31 35L31 34L32 34L32 33ZM64 33L64 35L65 35L65 36L67 36L67 37L68 37L68 38L69 38L69 37L68 37L68 35L65 35L65 33ZM6 34L6 35L7 35L7 34ZM34 34L34 35L35 35L35 34ZM39 34L39 35L41 35L41 34ZM52 36L52 37L53 37L53 36ZM58 36L58 37L57 37L57 38L58 38L58 37L59 37L59 36ZM0 37L0 39L1 39L1 37ZM64 37L64 38L63 38L63 39L64 39L64 38L65 38L65 37ZM6 39L6 40L7 40L7 41L8 41L8 40L11 40L11 39ZM64 40L64 41L63 41L63 42L64 42L64 41L65 41L65 40ZM36 41L36 43L34 43L34 44L37 44L37 41ZM57 41L57 42L58 42L58 43L59 43L59 41ZM46 42L46 43L47 43L47 42ZM60 42L60 43L62 43L62 44L63 44L63 43L62 43L62 42ZM67 42L67 44L68 44L68 42ZM49 43L49 46L51 46L51 43ZM53 43L53 44L54 44L54 43ZM5 45L5 48L8 48L8 45ZM17 45L17 46L19 46L19 45ZM25 45L25 48L28 48L28 45ZM29 45L29 46L30 46L30 47L31 47L31 46L30 46L30 45ZM34 45L34 46L36 46L36 45ZM43 45L43 46L42 46L42 47L44 47L44 45ZM45 45L45 48L48 48L48 45ZM65 45L65 48L68 48L68 45ZM6 46L6 47L7 47L7 46ZM9 46L9 47L10 47L10 46ZM26 46L26 47L27 47L27 46ZM46 46L46 47L47 47L47 46ZM66 46L66 47L67 47L67 46ZM70 46L70 47L69 47L69 48L71 48L71 49L70 49L70 50L72 50L72 48L71 48L71 46ZM63 47L63 48L64 48L64 47ZM8 49L8 50L9 50L9 49ZM14 49L14 50L15 50L15 49ZM66 49L66 52L67 52L67 50L69 50L69 49ZM29 50L29 51L30 51L30 50ZM46 51L46 52L47 52L47 53L45 53L45 55L46 55L46 54L47 54L47 55L48 55L48 54L49 54L49 53L48 53L48 52L47 52L47 51ZM56 51L56 52L55 52L55 53L56 53L56 54L57 54L57 51ZM10 52L10 53L8 53L8 54L9 54L9 55L10 55L10 54L11 54L11 53L12 53L12 52ZM34 52L34 53L37 53L37 52ZM62 52L62 53L63 53L63 52ZM31 54L31 55L29 55L29 56L28 56L28 57L27 57L27 59L29 59L29 58L30 58L30 59L31 59L31 57L32 57L32 58L33 58L33 57L32 57L32 56L31 56L31 55L33 55L33 54ZM34 54L34 55L35 55L35 54ZM6 55L6 56L7 56L7 55ZM40 55L40 56L41 56L41 55ZM51 55L51 56L52 56L52 55ZM57 55L57 57L58 57L58 55ZM29 56L29 57L28 57L28 58L29 58L29 57L31 57L31 56ZM57 58L57 59L58 59L58 58ZM11 59L11 60L12 60L12 59ZM20 59L20 60L21 60L21 59ZM24 59L24 60L22 60L22 61L24 61L24 62L26 62L26 60L25 60L25 59ZM38 60L38 61L39 61L39 60ZM55 60L55 61L56 61L56 60ZM57 60L57 61L58 61L58 60ZM27 61L27 62L30 62L30 61ZM43 62L43 63L44 63L44 64L43 64L43 66L41 66L41 63L40 63L40 64L39 64L39 63L38 63L38 64L39 64L39 65L38 65L38 66L37 66L37 65L36 65L36 66L35 66L35 65L33 65L33 63L32 63L32 65L33 65L33 66L32 66L32 67L31 67L31 68L32 68L32 69L31 69L31 71L30 71L30 70L29 70L29 69L28 69L28 71L29 71L29 72L32 72L32 71L33 71L33 70L32 70L32 69L33 69L33 68L35 68L35 67L36 67L36 66L37 66L37 68L38 68L38 70L39 70L39 69L41 69L41 67L42 67L42 68L44 68L44 67L43 67L43 66L44 66L44 64L45 64L45 63L44 63L44 62ZM0 64L0 65L1 65L1 64ZM25 65L25 68L28 68L28 65ZM45 65L45 68L48 68L48 65ZM59 65L59 66L61 66L61 65ZM65 65L65 68L68 68L68 65ZM19 66L19 67L20 67L20 66ZM26 66L26 67L27 67L27 66ZM38 66L38 68L40 68L40 67L41 67L41 66ZM46 66L46 67L47 67L47 66ZM63 66L63 68L64 68L64 66ZM66 66L66 67L67 67L67 66ZM29 67L29 68L30 68L30 67ZM32 67L32 68L33 68L33 67ZM58 67L58 68L60 68L60 67ZM25 69L25 71L26 71L26 70L27 70L27 69ZM46 69L46 70L48 70L48 69ZM63 69L63 70L64 70L64 71L65 71L65 70L64 70L64 69ZM70 69L70 70L71 70L71 71L70 71L70 72L72 72L72 69ZM20 70L20 72L21 72L21 70ZM59 70L59 71L60 71L60 70ZM15 71L15 72L16 72L16 71ZM46 71L46 72L47 72L47 71ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM66 0L66 7L73 7L73 0ZM67 1L67 6L72 6L72 1ZM68 2L68 5L71 5L71 2ZM0 66L0 73L7 73L7 66ZM1 67L1 72L6 72L6 67ZM2 68L2 71L5 71L5 68Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="subtext">
                                        <span>
                                            Efood QR Code
                                        </span>
                                    </div>
                                    <div class="open-time">
                                        <div>OPEN DAILY</div>
                                        <div>02:09 - 23:09</div>
                                    </div>
                                    <div class="phone-number">
                                        PHONE NUMBER : 01XXXXXXXX
                                    </div>
                                    <div class="row g-0 text-center bottom-txt">
                                        <div class="col-6 border-right py-3 px-2">
                                            https://efood-web.6amtech.com/qr-category-screen
                                        </div>
                                        <div class="col-6 py-3">
                                            https://www.facebook.com/6amtech
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-side">
                                <form method="post"
                                    action="https://efood-admin.6amtech.com/admin/business-settings/restaurant/qrcode/store"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="JFd0RExDvxU98LWbwP8oqeNymXcSrRT7lhB3iQJz">
                                    <div class="row">
                                        <div class="col-12" id="branch_section">
                                            <div class="form-group">
                                                <label class="input-label">Branch</label>
                                                <select class="form-control js-select2-custom" name="branch_id">
                                                    <option value="1">Main Branch</option>
                                                    <option value="2">Branch 2</option>
                                                    <option value="3">Farmgate</option>
                                                    <option value="4">Dhaka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="input-label">Logo / Icon</label>
                                                <label class="custom-file">
                                                    <input type="file" name="logo" class="custom-file-input"
                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                                    <span class="custom-file-label">Choose File</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="input-label">Title</label>
                                                <input type="text" name="title" placeholder="Ex : Title"
                                                    class="form-control" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="input-label">Description</label>
                                                <input type="text" name="description" placeholder="Ex : Description"
                                                    value="" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="input-label">Opening Time</label>
                                                <input type="time" class="form-control" name="opening_time"
                                                    value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="input-label">Closing Time</label>
                                                <input type="time" class="form-control" name="closing_time"
                                                    value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="input-label">Phone</label>
                                                <input type="text" name="phone" placeholder="Ex : +123456"
                                                    value="" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="input-label">Website Link</label>
                                                <input type="text" name="website" value=""
                                                    placeholder="Ex : www.website.com" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="input-label">Social Media Name</label>
                                                <input type="text" placeholder="@social media name"
                                                    name="social_media" value="" class="form-control"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn--container">
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="footer">
            <div class="row justify-content-between align-items-center gy-2">
                <div class="col-md-4">
                    <p class="font-size-sm mb-0 text-center text-md-left">
                        e-Food @ 2023
                    </p>
                </div>
                <div class="col-md-8">

                    <ul class="list-inline-menu justify-content-center justify-content-md-end">
                        <li>
                            <a href="javascript:void(0)">
                                <span>Business Setup</span>
                                <img width="12" class="avatar-img rounded-0"
                                    src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/business_setup.png"
                                    alt="Image Description">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span>Profile</span>
                                <img width="12" class="avatar-img rounded-0"
                                    src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/profile.png"
                                    alt="Image Description">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <span>Home</span>
                                <img width="12" class="avatar-img rounded-0"
                                    src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/home.png"
                                    alt="Image Description">
                            </a>
                        </li>
                        <li>
                            <label class="badge badge-soft-c1 font-weight-bold fz-12 mb-0">
                                Software Version : 10.2
                            </label>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="modal fade" id="popup-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <h2 style="color: rgba(96,96,96,0.68)">
                                        <i class="tio-shopping-cart-outlined"></i> You have new order, Check Please.
                                    </h2>
                                    <hr>
                                    <button onclick="check_order()" class="btn btn-primary">Ok, let me check</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="toggle-status-modal">
            <div class="modal-dialog status-warning-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true" class="tio-clear"></span>
                        </button>
                    </div>
                    <div class="modal-body pb-5 pt-0">
                        <div class="max-349 mx-auto mb-20">
                            <div>
                                <div class="text-center">
                                    <img id="toggle-status-image" alt="" class="mb-20">
                                    <h5 class="modal-title" id="toggle-status-title"></h5>
                                </div>
                                <div class="text-center" id="toggle-status-message">
                                </div>
                            </div>
                            <div class="btn--container justify-content-center">
                                <button type="button" id="toggle-status-ok-button" class="btn btn-primary min-w-120"
                                    data-dismiss="modal" onclick="confirmStatusToggle()">Ok</button>
                                <button id="reset_btn" type="reset" class="btn btn-secondary min-w-120"
                                    data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
