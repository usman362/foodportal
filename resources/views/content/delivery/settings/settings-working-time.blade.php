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
                    <li class="db-breadcrumb-item"><span>Time Slots</span></li>
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
                        aria-current="page" href="#/admin/settings/time-slots"
                        class="active router-link-exact-active db-tab-btn"><i class="lab lab-time-slots text-sm"></i> Time
                        Slots</a><a href="#/admin/settings/sliders" class="db-tab-btn"><i
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
            <div class="db-card">
                <div class="db-card-header">
                    <h3 class="db-card-title">Time Slots</h3>
                </div>
                <div class="db-card-body py-0">
                    <ul class="flex flex-col">
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Monday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Tuesday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Wednesday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Thursday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Friday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Saturday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="flex sm:items-center flex-col sm:flex-row border-b border-[#EFF0F6]">
                            <!-- Slot weekenday name -->
                            <p class="capitalize pt-5 sm:pt-0 w-24 flex-shrink-0 text-sm text-[#374151]">Sunday</p>
                            <!-- Slot content group -->
                            <div class="flex items-center mr-4 flex-wrap border-l border-[#EFF0F6] velmld-parent">
                                <!-- Slot time box -->
                                <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                    style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                    <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                            data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                            xml:space="preserve">
                                            <rect x="0" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML"
                                                    values="0.2; 1; .2" begin="0s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML"
                                                    values="10; 20; 10" begin="0s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="8" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML"
                                                    values="0.2; 1; .2" begin="0.15s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML"
                                                    values="10; 20; 10" begin="0.15s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                            <rect x="16" y="10" width="4" height="10" fill="#696cff"
                                                opacity="0.2">
                                                <animate attributeName="opacity" attributeType="XML"
                                                    values="0.2; 1; .2" begin="0.3s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="height" attributeType="XML"
                                                    values="10; 20; 10" begin="0.3s" dur="0.6s"
                                                    repeatCount="indefinite"></animate>
                                                <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                    begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            </rect>
                                        </svg><!----></div>
                                </div><button type="button" data-modal="#modal"
                                    class="flex items-center gap-1.5 time-slot-gap h-7 px-3 rounded-2xl bg-[#FFEDF4] text-primary"><i
                                        class="lab lab-plus"></i><span
                                        class="text-xs font-semibold capitalize text-primary">Add</span></button>
                                <div id="modal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Time Slots</h3><button
                                                class="modal-close fa-solid fa-xmark text-xl text-slate-400 hover:text-red-500"></button>
                                        </div>
                                        <div class="modal-body"><!--v-if-->
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-col-12 sm:form-col-12"><label for="opening_time"
                                                            class="db-field-title required">Opening Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12 sm:form-col-12"><label for="closing_time"
                                                            class="db-field-title required">Closing Time</label>
                                                        <div class="dp__main dp__theme_light">
                                                            <div aria-label="Datepicker input" role="textbox"
                                                                aria-multiline="false" aria-disabled="false"
                                                                aria-readonly="false"><!---->
                                                                <div class="dp__input_wrap"><!----><input
                                                                        class="dp__pointer dp__input_readonly dp__input dp__input_reg"
                                                                        inputmode="none" placeholder=""
                                                                        autocomplete="off"><!----><!----><!----><!---->
                                                                </div>
                                                            </div><!---->
                                                        </div><!--v-if-->
                                                    </div>
                                                    <div class="form-col-12">
                                                        <div class="modal-btns"><button type="button"
                                                                class="modal-btn-outline modal-close"><i
                                                                    class="lab lab-close"></i><span>Close</span></button><button
                                                                type="submit"
                                                                class="db-btn py-2 text-white bg-primary"><i
                                                                    class="lab lab-save"></i><span>Save</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
