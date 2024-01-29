@extends('layouts/layoutMaster')

@section('title', 'Orders All Order')

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

            <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                <h2 class="h1 mb-0 d-flex align-items-center gap-1">
                    <img width="20" class="avatar-img"
                        src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/all_orders.png" alt="">
                    <span class="page-header-title">
                        All Orders
                    </span>
                </h2>
                <span class="badge badge-soft-dark rounded-50 fz-14">88</span>
            </div>


            <div class="card">

                <div class="card">
                    <div class="card-body">
                        <form action="#" id="form-data" method="GET">
                            <div class="row gy-3 gx-2 align-items-end">
                                <div class="col-12 pb-0">
                                    <h4 class="mb-0">Select date range</h4>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <label for="select_branch">Select Branch</label>

                                    <select class="form-control" name="branch" onchange="filter_branch_orders(this.value)"
                                        id="select_branch">
                                        <option disabled="" selected="">--- Select Branch ---</option>
                                        <option value="0" selected="">All Branch</option>
                                        <option value="1">Main Branch</option>
                                        <option value="2">Branch 2</option>
                                        <option value="3">Farmgate</option>
                                        <option value="4">Dhaka</option>
                                    </select>

                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group mb-0">
                                        <label class="text-dark">Start Date</label>
                                        <input type="date" name="from" value="" id="from_date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group mb-0">
                                        <label class="text-dark">End Date</label>
                                        <input type="date" value="" name="to" id="to_date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 d-flex gap-2">
                                    <button type="clear" class="btn btn-secondary flex-grow-1">Clear</button>
                                    <button type="submit" class="btn btn-primary text-nowrap flex-grow-1"
                                        onclick="formUrlChange(this)">Show Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="px-4 mt-4">
                    <div class="row g-2">
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100" href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/pending.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Pending</span>
                                    </h6>
                                    <span class="card-title text-0661CB">
                                        34
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100" href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/confirmed.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Confirmed</span>
                                    </h6>
                                    <span class="card-title text-107980">
                                        14
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100"
                                href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/packaging.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Processing</span>
                                    </h6>
                                    <span class="card-title text-danger">
                                        4
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100"
                                href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/out_for_delivery.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Out for delivery</span>
                                    </h6>
                                    <span class="card-title text-00B2BE">
                                        3
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100"
                                href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/delivered.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Delivered</span>
                                    </h6>
                                    <span class="card-title text-success">
                                        21
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100"
                                href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/canceled.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Canceled</span>
                                    </h6>
                                    <span class="card-title text-danger">
                                        3
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100"
                                href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/returned.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Returned</span>
                                    </h6>
                                    <span class="card-title text-warning">
                                        2
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <a class="order--card h-100" href="javascript:void(0)">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="card-subtitle d-flex justify-content-between m-0 align-items-center">
                                        <img src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/failed_to_deliver.png"
                                            alt="dashboard" class="oder--card-icon">
                                        <span>Failed to deliver</span>
                                    </h6>
                                    <span class="card-title text-danger">
                                        2
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-top px-card pt-4">
                    <div class="row justify-content-between align-items-center gy-2">
                        <div class="col-sm-8 col-md-6 col-lg-4">
                            <form action="javascript:void(0)" method="GET">
                                <div class="input-group">
                                    <input id="datatableSearch_" type="search" name="search" class="form-control"
                                        placeholder="Search by Order ID, Order Status or Transaction Reference"
                                        aria-label="Search" value="" required="" autocomplete="off">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-8 d-flex justify-content-end">
                            <div>
                                <button type="button" class="btn btn-outline-primary" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="tio-download-to"></i>
                                    Export
                                    <i class="tio-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a type="submit" class="dropdown-item d-flex align-items-center gap-2"
                                            href="javascript:void(0)">
                                            <img width="14"
                                                src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/excel.png"
                                                alt="">
                                            Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="py-4">
                    <div class="table-responsive datatable-custom">
                        <table
                            class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Order ID</th>
                                    <th>Delivery Date</th>
                                    <th>Customer Info</th>
                                    <th>Branch</th>
                                    <th>Total Amount</th>
                                    <th>Order Status</th>
                                    <th>Order Type</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="set-rows">
                                <tr class="status-confirmed class-all">
                                    <td>1</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100108</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>06:59 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>136.00$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-delivered class-all">
                                    <td>2</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100107</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>137.00$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivered</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>3</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100106</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>353.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>4</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100105</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>195.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>5</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100104</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>151.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>6</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100103</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>154.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>7</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100102</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>07:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>1,866.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>8</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100101</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>06:37 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>180.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-out_for_delivery class-all">
                                    <td>9</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100100</a>
                                    </td>
                                    <td>
                                        <div>07 Nov 2023</div>
                                        <div>06:36 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Anika
                                                Tahosin</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801700112233">+8801700112233</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>195.00$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-warning px-2 py-1 rounded">Out for delivery</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>10</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100099</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:17 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>127.00$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>11</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100098</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:44 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize text-info">
                                            Guest Customer
                                        </h6>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>157.95$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>12</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100097</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:44 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize text-info">
                                            Guest Customer
                                        </h6>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>195.00$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Take away</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>13</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100096</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:34 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>336.95$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-processing class-all">
                                    <td>14</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100095</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:30 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>211.95$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-warning px-2 py-1 rounded">Processing</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>15</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100094</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:29 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize text-info">
                                            Guest Customer
                                        </h6>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>164.95$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>16</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100093</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:27 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>2,001.59$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>17</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100092</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:25 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>2,001.59$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>18</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100091</a>
                                    </td>
                                    <td>
                                        <div>11 Sep 2023</div>
                                        <div>02:23 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Will
                                                Smith</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801621720045">+8801621720045</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>201.95$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-done class-all">
                                    <td>19</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100089</a>
                                    </td>
                                    <td>
                                        <div>09 Mar 2023</div>
                                        <div>01:21 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Sir Moba</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801112223336">+8801112223336</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Branch 2</span>
                                    </td>
                                    <td>
                                        <div>299.87$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-danger px-2 py-1 rounded">done</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-delivered class-all">
                                    <td>20</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100088</a>
                                    </td>
                                    <td>
                                        <div>08 Mar 2023</div>
                                        <div>11:17 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Sir Moba</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801112223336">+8801112223336</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Branch 2</span>
                                    </td>
                                    <td>
                                        <div>6,423.87$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivered</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-delivered class-all">
                                    <td>21</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100087</a>
                                    </td>
                                    <td>
                                        <div>08 Mar 2023</div>
                                        <div>10:58 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Sir Moba</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801112223336">+8801112223336</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Dhaka</span>
                                    </td>
                                    <td>
                                        <div>12,010.00$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivered</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-delivered class-all">
                                    <td>22</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100086</a>
                                    </td>
                                    <td>
                                        <div>19 Feb 2023</div>
                                        <div>12:34 AM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">Sir Moba</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801112223336">+8801112223336</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>156.96$</div>
                                        <span class="text-success">Paid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivered</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-confirmed class-all">
                                    <td>23</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100085</a>
                                    </td>
                                    <td>
                                        <div>04 Jan 2023</div>
                                        <div>05:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">fatema
                                                subarna</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801885576623">+8801885576623</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>141.95$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Confirmed</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>24</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100084</a>
                                    </td>
                                    <td>
                                        <div>04 Jan 2023</div>
                                        <div>05:01 PM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">fatema
                                                subarna</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801885576623">+8801885576623</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>176.95$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="status-pending class-all">
                                    <td>25</td>
                                    <td>
                                        <a class="text-dark"
                                            href="javascript:void(0)">100083</a>
                                    </td>
                                    <td>
                                        <div>05 Jan 2023</div>
                                        <div>02:01 AM</div>
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize mb-1">
                                            <a class="text-dark"
                                                href="javascript:void(0)">fatema
                                                subarna</a>
                                        </h6>
                                        <a class="text-dark fz-12" href="tel:+8801885576623">+8801885576623</a>
                                    </td>
                                    <td>
                                        <span class="badge-soft-info px-2 py-1 rounded">Main Branch</span>
                                    </td>
                                    <td>
                                        <div>243.95$</div>
                                        <span class="text-danger">Unpaid</span>
                                    </td>
                                    <td class="text-capitalize">
                                        <span class="badge-soft-info px-2 py-1 rounded">Pending</span>
                                    </td>
                                    <td>
                                        <span class="badge-soft-success px-2 py-1 rounded">Delivery</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a class="btn btn-sm btn-outline-primary square-btn"
                                                href="javascript:void(0)">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success square-btn" target="_blank">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="table-responsive mt-4 px-3">
                    <div class="d-flex justify-content-lg-end">

                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link"
                                        href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="javascript:void(0)">4</a></li>
                                <li class="page-item">
                                    <a class="page-link"
                                        href="javascript:void(0)" rel="next"
                                        aria-label="Next »">›</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

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
                                    src="javascript:void(0)"
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
