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
                    <li class="db-breadcrumb-item"><span>Company</span></li>
                </ul>
            </div>
        </div>
        <div class="col-12 md:col-4 xl:col-3"><button
                class="settings-btn w-full md:hidden flex items-center justify-center gap-2 p-2 rounded bg-primary text-white"><span
                    class="capitalize">Settings Menu</span><i class="fa-solid fa-chevron-down text-sm"></i></button>
            <div class="h-0 overflow-hidden md:h-auto md:overflow-auto transition-all duration-300">
                <nav class="db-card p-3"><a aria-current="page" href="#/admin/settings/company"
                        class="active router-link-exact-active db-tab-btn"><i class="lab lab-company text-sm"></i>
                        Company</a><a href="#/admin/settings/site" class="db-tab-btn"><i class="lab lab-site text-sm"></i>
                        Site</a><a href="#/admin/settings/branches" class="db-tab-btn"><i
                            class="lab lab-branches text-sm"></i> Branches</a><a href="#/admin/settings/mail"
                        class="db-tab-btn"><i class="lab lab-mail text-sm"></i> Mail</a><a
                        href="#/admin/settings/order-setup" class="db-tab-btn"><i class="lab lab-order-setup text-sm"></i>
                        Order Setup</a><a href="#/admin/settings/otp" class="db-tab-btn"><i class="lab lab-otp text-sm"></i>
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
            <div id="company" class="db-card db-tab-div active">
                <div class="db-card-header">
                    <h3 class="db-card-title">Company</h3>
                </div>
                <div class="db-card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-col-12 sm:form-col-6"><label for="name"
                                    class="db-field-title required">Name</label><input class="db-field-control"
                                    type="text" id="name"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="email"
                                    class="db-field-title required">Email</label><input class="db-field-control"
                                    type="text" id="email"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="phone"
                                    class="db-field-title required">Phone</label><input class="db-field-control"
                                    type="text" id="phone"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="website"
                                    class="db-field-title">Website</label><input class="db-field-control" type="text"
                                    id="website"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="city"
                                    class="db-field-title required">City</label><input class="db-field-control"
                                    type="text" id="city"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="company_state"
                                    class="db-field-title required">State</label><input class="db-field-control"
                                    type="text" id="company_state"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="country_code"
                                    class="db-field-title required">Country Code</label>
                                <div class="vue-select direction-bottom db-field-control f-b-custom-select" tabindex="0"
                                    data-is-focusing="false" data-visible-length="0" data-not-selected-length="0"
                                    data-selected-length="0" data-addable="true" data-removable="false"
                                    data-total-length="0" data-multiple="false" data-loading="false"
                                    data-disabled="false" id="vs115-combobox" role="combobox" aria-expanded="false"
                                    aria-haspopup="listbox" aria-owns="vs115-listbox" aria-busy="false"
                                    aria-disabled="false">
                                    <div class="vue-select-header"><!--v-if-->
                                        <div class="vue-input"><input autocomplete="off" modelvalue="" placeholder="--"
                                                tabindex="0" aria-autocomplete="list" aria-controls="vs115-listbox"
                                                aria-labelledby="vs115-combobox"></div><span
                                            class="icon arrow-downward"></span>
                                    </div><!--v-if-->
                                    <ul class="vue-dropdown" data-is-focusing="false" data-visible-length="0"
                                        data-not-selected-length="0" data-selected-length="0" data-addable="true"
                                        data-removable="false" data-total-length="0" data-multiple="false"
                                        data-loading="false" data-disabled="false" role="listbox" id="vs115-listbox"
                                        aria-multiselectable="false" aria-busy="false" aria-disabled="false"
                                        style="max-height: 300px;"></ul>
                                </div><!--v-if-->
                            </div>
                            <div class="form-col-12 sm:form-col-6"><label for="company_zip_code"
                                    class="db-field-title required">Zip Code</label><input class="db-field-control"
                                    type="text" id="company_zip_code"><!--v-if--></div>
                            <div class="form-col-12 sm:form-col-6"><label for="company_zip_code"
                              class="db-field-title required">Upload Logo</label><input class="db-field-control"
                              type="file" id="company_zip_code"><!--v-if--></div>
                            <div class="form-col-12"><label for="address"
                                    class="db-field-title required">Address</label>
                                <textarea class="db-field-control" id="address">
                                                                                                            </textarea><!--v-if-->
                            </div>
                            <div class="form-col-12"><button type="submit" class="db-btn text-white bg-primary"><i
                                        class="lab lab-save"></i><span>Save</span></button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
