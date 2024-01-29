@extends('layouts/layoutMaster')

@section('title', 'Food & Drink Item')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
    <link rel="stylesheet" href="{{asset('efood/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('efood/css/theme.min.css')}}" />
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
                        src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/banner.png" alt="">
                    <span class="page-header-title">
                        Banner Setup
                    </span>
                </h2>
            </div>

            <div class="row g-2">
                <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
                    <form action="javascript:void(0)" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="input-label">Title<span class="text-danger ml-1">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="New banner" required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="input-label">Item Type<span
                                                    class="text-danger ml-1">*</span></label>
                                            <select name="item_type"
                                                class="custom-select js-select2-custom select2-hidden-accessible"
                                                onchange="show_item(this.value)" tabindex="-1" aria-hidden="true"
                                                data-select2-id="15">
                                                <option selected="" disabled="" data-select2-id="17">Select item type
                                                </option>
                                                <option value="product" data-select2-id="18">Product</option>
                                                <option value="category" data-select2-id="19">Category</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="type-product">
                                            <label class="input-label">Product <span
                                                    class="text-danger ml-1">*</span></label>
                                            <select name="product_id"
                                                class="custom-select js-select2-custom select2-hidden-accessible"
                                                tabindex="-1" aria-hidden="true" data-select2-id="39">
                                                <option selected="" disabled="" data-select2-id="41">Select a product
                                                </option>
                                                <option value="2" data-select2-id="42">Super Charger Burger</option>
                                                <option value="3" data-select2-id="43">Beef Spicy Burger</option>
                                                <option value="4" data-select2-id="44">Grilled Cheese Burger</option>
                                                <option value="5" data-select2-id="45">Italian Spicy Pizza</option>
                                                <option value="6" data-select2-id="46">Mozzarella Cheese Pizza</option>
                                                <option value="7" data-select2-id="47">Set Menu 1</option>
                                                <option value="8" data-select2-id="48">Chicken Biriyani</option>
                                                <option value="9" data-select2-id="49">Beef Biriyani With Spice Masala
                                                </option>
                                                <option value="10" data-select2-id="50">Set Menu 2</option>
                                                <option value="11" data-select2-id="51">Cheese Sandwich With Spicy
                                                    Grilled</option>
                                                <option value="16" data-select2-id="52">Spicy Burger</option>
                                                <option value="17" data-select2-id="53">Cola Bottle</option>
                                                <option value="18" data-select2-id="54">Fresh Lime</option>
                                                <option value="19" data-select2-id="55">Zinger &amp; Pop</option>
                                                <option value="20" data-select2-id="56">Popcorn Rice Bowl</option>
                                                <option value="21" data-select2-id="57">Chizza Meal</option>
                                                <option value="22" data-select2-id="58">Buddy Zinger Combo</option>
                                                <option value="24" data-select2-id="59">Special Cold Coffee</option>
                                                <option value="25" data-select2-id="60">Ice Cream</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="type-category" style="display: none">
                                            <label class="input-label">Category <span
                                                    class="text-danger ml-1">*</span></label>
                                            <select name="category_id"
                                                class="custom-select js-select2-custom select2-hidden-accessible"
                                                tabindex="-1" aria-hidden="true" data-select2-id="68">
                                                <option selected="" disabled="" data-select2-id="70">Select a
                                                    category</option>
                                                <option value="24" data-select2-id="71">Burger</option>
                                                <option value="25" data-select2-id="72">Pizza</option>
                                                <option value="26" data-select2-id="73">Sandwich</option>
                                                <option value="27" data-select2-id="74">Biriyani</option>
                                                <option value="28" data-select2-id="75">Set Menu</option>
                                                <option value="38" data-select2-id="76">Drinks</option>
                                                <option value="39" data-select2-id="77">Hot Item</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-center gap-1">
                                                <label class="mb-0">Banner Image</label>
                                                <small class="text-danger">* ( Ratio 3:1 )</small>
                                            </div>
                                            <div class="d-flex justify-content-center mt-4">
                                                <div class="upload-file">
                                                    <input type="file" name="image"
                                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"
                                                        class="upload-file__input">
                                                    <div class="upload-file__img_drag upload-file__img">
                                                        <img width="465" id="viewer"
                                                            src="https://efood-admin.6amtech.com/public/assets/admin/img/icons/upload_img2.png"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end gap-3 mt-4">
                                    <button type="reset" id="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-12">

                    <div class="card">
                        <div class="card-top px-card pt-4">
                            <div class="row align-items-center gy-2">
                                <div class="col-sm-4 col-md-6 col-lg-8">
                                    <h5 class="d-flex align-items-center gap-2 mb-0">
                                        Banner List
                                        <span class="badge badge-soft-dark rounded-50 fz-12">6</span>
                                    </h5>
                                </div>
                                <div class="col-sm-8 col-md-6 col-lg-4">
                                    <form action="javascript:void(0)" method="GET">
                                        <div class="input-group">
                                            <input id="datatableSearch_" type="search" name="search"
                                                class="form-control" placeholder="Search by Title" aria-label="Search"
                                                value="" required="" autocomplete="off">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="py-4">
                            <div class="table-responsive datatable-custom">
                                <table
                                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>SL</th>
                                            <th>Banner Image</th>
                                            <th>Title</th>
                                            <th>Banner Type</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2023-11-07-654a2d3043188.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Offer on every order
                                                </div>
                                            </td>
                                            <td>Category: Pizza</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" checked=""
                                                        id="13"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/13/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-13','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-13">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2023-11-07-654a2b6723fb3.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Up to 20% off
                                                </div>
                                            </td>
                                            <td>Product: Beef Spicy Burg...</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" checked=""
                                                        id="12"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/12/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-12','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-12">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2023-11-07-654a2b25d0103.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Sepecial offer (Up to 50% Off)
                                                </div>
                                            </td>
                                            <td>Category: Hot Item</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" checked=""
                                                        id="11"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/11/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-11','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-11">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2023-11-07-654a2add22528.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Special offer
                                                </div>
                                            </td>
                                            <td>Product: Italian Spicy P...</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" checked=""
                                                        id="10"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/10/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-10','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-10">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2021-02-26-60388d4cd1144.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Best reviewed
                                                </div>
                                            </td>
                                            <td>Category: Set Menu</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" id="7"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/7/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-7','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-7">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <img class="img-vertical-150"
                                                    src="https://efood-admin.6amtech.com/storage/app/public/banner/2021-02-26-60388d186e180.png"
                                                    onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/900x400/img1.jpg'">
                                            </td>
                                            <td>
                                                <div class="max-w300 text-wrap">
                                                    Banner 3
                                                </div>
                                            </td>
                                            <td>Product: Grilled Cheese ...</td>
                                            <td>
                                                <label class="switcher">
                                                    <input class="switcher_input" type="checkbox" checked=""
                                                        id="3"
                                                        data-url="https://efood-admin.6amtech.com/admin/banner/status/3/0"
                                                        onchange="status_change(this)">
                                                    <span class="switcher_control"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a class="btn btn-outline-info btn-sm edit square-btn"
                                                        href="javascript:void(0)"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button"
                                                        class="btn btn-outline-danger btn-sm delete square-btn"
                                                        onclick="form_alert('banner-3','Want to delete this banner')"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                                <form action="javascript:void(0)"
                                                    method="post" id="banner-3">
                                                    <input type="hidden" name="_token"
                                                        value="dQLPSzEwBuCfLpK8QEUDFq1z8oDDXzo8p3gIjsNt"> <input
                                                        type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive mt-4 px-3">
                                <div class="d-flex justify-content-lg-end">

                                </div>
                            </div>
                        </div>

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
