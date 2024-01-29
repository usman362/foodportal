@extends('layouts/layoutMaster')

@section('title', 'Settings delivery area')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
    <link rel="stylesheet" href="{{ asset('foodking/css/style.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>
    <script src="{{ asset('foodking/js/drawer.js') }}"></script>
    <script src="{{ asset('foodking/js/modal.js') }}"></script>
    <script src="{{ asset('foodking/js/jqueryScript.js') }}"></script>
    <script src="{{ asset('foodking/js/tabs.js') }}"></script>
    <script src="{{ asset('foodking/js/jqueryDropdown.js') }}"></script>
    <script src="{{ asset('foodking/js/apexcharts/apexcharts.min.js') }}"></script>
@endsection

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="db-breadcrumb">
                <ul class="db-breadcrumb-list">
                    <li class="db-breadcrumb-item"><a href="#/admin/dashboard" class="db-breadcrumb-link">Dashboard</a></li>
                    <li class="db-breadcrumb-item"><span><a href="#/admin/settings"
                                class="active db-breadcrumb-link">Settings</a></span></li>
                    <li class="db-breadcrumb-item"><span>Order Setup</span></li>
                </ul>
            </div>
        </div>
        <div class="col-12 md:col-4 xl:col-3"><button
                class="settings-btn w-full md:hidden flex items-center justify-center gap-2 p-2 rounded bg-primary text-white"><span
                    class="capitalize">Settings Menu</span><i class="fa-solid fa-chevron-down text-sm"></i></button>
            <div class="h-0 overflow-hidden md:h-auto md:overflow-auto transition-all duration-300">
                <nav class="db-card p-3"><a href="#/admin/settings/company" class="db-tab-btn"><i
                            class="lab lab-company text-sm"></i> Company</a><a href="#/admin/settings/site"
                        class="db-tab-btn"><i class="lab lab-site text-sm"></i> Site</a><a href="#/admin/settings/branches"
                        class="db-tab-btn"><i class="lab lab-branches text-sm"></i> Branches</a><a
                        href="#/admin/settings/mail" class="db-tab-btn"><i class="lab lab-mail text-sm"></i> Mail</a><a
                        aria-current="page" href="#/admin/settings/order-setup"
                        class="active router-link-exact-active db-tab-btn"><i class="lab lab-order-setup text-sm"></i> Order
                        Setup</a><a href="#/admin/settings/otp" class="db-tab-btn"><i class="lab lab-otp text-sm"></i>
                        OTP</a><a href="#/admin/settings/notification" class="db-tab-btn"><i
                            class="lab lab-notification text-sm"></i> Notification</a><a
                        href="#/admin/settings/notification-alert" class="db-tab-btn"><i
                            class="lab lab-license text-sm"></i> Notification Alert</a><a
                        href="#/admin/settings/social-media" class="db-tab-btn"><i class="lab lab-social-media text-sm"></i>
                        Social Media</a><a href="#/admin/settings/cookies" class="db-tab-btn"><i
                            class="lab lab-cookies text-sm"></i> Cookies</a><a href="#/admin/settings/analytics"
                        class="db-tab-btn"><i class="lab lab-analytics text-sm"></i> Analytics</a><a
                        href="#/admin/settings/theme" class="db-tab-btn"><i class="lab lab-theme text-sm"></i> Theme</a><a
                        href="#/admin/settings/time-slots" class="db-tab-btn"><i class="lab lab-time-slots text-sm"></i>
                        Time Slots</a><a href="#/admin/settings/sliders" class="db-tab-btn"><i
                            class="lab lab-sliders text-sm"></i> Sliders</a><a href="#/admin/settings/currencies"
                        class="db-tab-btn"><i class="lab lab-currencies text-sm"></i> Currencies</a><a
                        href="#/admin/settings/item-categories" class="db-tab-btn"><i
                            class="lab lab-item-categories text-sm"></i> Item Categories</a><a
                        href="#/admin/settings/item-attributes" class="db-tab-btn"><i
                            class="lab lab-item-attributes text-sm"></i> Item Attributes</a><a href="#/admin/settings/taxes"
                        class="db-tab-btn"><i class="lab lab-taxes text-sm"></i> Taxes</a><a href="#/admin/settings/pages"
                        class="db-tab-btn"><i class="lab lab-pages text-sm"></i> Pages</a><a href="#/admin/settings/role"
                        class="db-tab-btn"><i class="lab lab-role-permissions text-sm"></i> Role &amp; Permissions</a><a
                        href="#/admin/settings/languages" class="db-tab-btn"><i class="lab lab-languages text-sm"></i>
                        Languages</a><a href="#/admin/settings/sms-gateway" class="db-tab-btn"><i
                            class="lab lab-sms text-sm"></i> Sms Gateway</a><a href="#/admin/settings/payment-gateway"
                        class="db-tab-btn"><i class="lab lab-payment-gateway text-sm"></i> Payment Gateway</a><a
                        href="#/admin/settings/license" class="db-tab-btn"><i class="lab lab-license text-sm"></i>
                        License</a></nav>
            </div>
        </div>
        <div class="col-12 md:col-8 xl:col-9 velmld-parent">
            <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9="" data-v-2964abc9-s=""
                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                        viewBox="0 0 24 30" xml:space="preserve">
                        <rect x="0" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="8" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                        <rect x="16" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s"
                                dur="0.6s" repeatCount="indefinite"></animate>
                        </rect>
                    </svg><!----></div>
            </div>
            <div id="order_setup" class="db-card db-tab-div active">
                <div class="db-card-header">
                    <h3 class="db-card-title">Order Setup</h3>
                </div>
                <div class="db-card-body">
                    <form data-gtm-form-interact-id="0">
                        <fieldset class="p-4 mb-6 border border-[#DBDEE0]">
                            <legend
                                class="py-1.5 px-4 text-base font-semibold capitalize border border-[#DBDEE0] text-primary">
                                Order</legend>
                            <div class="form-row">
                                <div class="form-col-12 sm:form-col-6"><label for="order_setup_food_preparation_time"
                                        class="db-field-title required">Food Preparation Time <span class="text-primary">(
                                            In Minute )</span></label><input class="db-field-control" type="text"
                                        id="order_setup_food_preparation_time"><!--v-if--></div>
                                <div class="form-col-12 sm:form-col-6"><label
                                        for="order_setup_schedule_order_slot_duration"
                                        class="db-field-title required">Schedule Order Slot Duration <span
                                            class="text-primary">( In Minute )</span></label><input
                                        class="db-field-control" type="text"
                                        id="order_setup_schedule_order_slot_duration"><!--v-if--></div>
                                <div class="form-col-12 sm:form-col-6"><label class="db-field-title required"
                                        for="enable">Takeaway</label>
                                    <div class="db-field-radio-group">
                                        <div class="db-field-radio">
                                            <div class="custom-radio"><input id="takeaway-enable" type="radio"
                                                    class="custom-radio-field" value="5" name="take_away"
                                                    data-gtm-form-interact-field-id="0"><span
                                                    class="custom-radio-span"></span></div><label for="takeaway-enable"
                                                class="db-field-label">Enable</label>
                                        </div>
                                        <div class="db-field-radio">
                                            <div class="custom-radio"><input type="radio" id="takeaway-disable"
                                                    class="custom-radio-field" value="10" name="take_away"
                                                    data-gtm-form-interact-field-id="1"><span
                                                    class="custom-radio-span"></span></div><label for="takeaway-disable"
                                                class="db-field-label">Disable</label>
                                        </div>
                                    </div><!--v-if-->
                                </div>
                                <div class="form-col-12 sm:form-col-6"><label class="db-field-title required"
                                        for="enable">Delivery</label>
                                    <div class="db-field-radio-group">
                                        <div class="db-field-radio">
                                            <div class="custom-radio"><input id="deliver-enable" type="radio"
                                                    class="custom-radio-field" value="5" name="delivert"><span
                                                    class="custom-radio-span"></span></div><label for="deliver-enable"
                                                class="db-field-label">Enable</label>
                                        </div>
                                        <div class="db-field-radio">
                                            <div class="custom-radio"><input type="radio" id="deliver-disable"
                                                    class="custom-radio-field" value="10" name="delivert"><span
                                                    class="custom-radio-span"></span></div><label for="deliver-disable"
                                                class="db-field-label">Disable</label>
                                        </div>
                                    </div><!--v-if-->
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="p-4 mb-6 border border-[#DBDEE0]">
                            <legend
                                class="py-1.5 px-4 text-base font-semibold capitalize border border-[#DBDEE0] text-primary">
                                Delivery Charge</legend>
                            <div class="form-row">
                                <div class="form-col-12 sm:form-col-6"><label for="order_setup_free_delivery_kilometer"
                                        class="db-field-title required">Free Delivery Kilometer</label><input
                                        class="db-field-control" type="text"
                                        id="order_setup_free_delivery_kilometer"><!--v-if--></div>
                                <div class="form-col-12 sm:form-col-6"><label for="order_setup_basic_delivery_charge"
                                        class="db-field-title required">Basic Delivery Charge</label><input
                                        class="db-field-control" type="text"
                                        id="order_setup_basic_delivery_charge"><!--v-if--></div>
                                <div class="form-col-12 sm:form-col-6"><label for="order_setup_charge_per_kilo"
                                        class="db-field-title required">Charge Per Kilo</label><input
                                        class="db-field-control" type="text"
                                        id="order_setup_charge_per_kilo"><!--v-if--></div>
                            </div>
                        </fieldset><button type="submit" class="db-btn text-white bg-primary"><i
                                class="lab lab-save"></i><span>Save</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
