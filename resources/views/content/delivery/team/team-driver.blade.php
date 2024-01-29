@extends('layouts/layoutMaster')

@section('title', 'Driver')

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
    <script src="{{asset('foodking/js/drawer.js')}}"></script>
    <script src="{{asset('foodking/js/modal.js')}}"></script>
    <script src="{{asset('foodking/js/jqueryScript.js')}}"></script>
    <script src="{{asset('foodking/js/tabs.js')}}"></script>
    <script src="{{asset('foodking/js/jqueryDropdown.js')}}"></script>
    <script src="{{asset('foodking/js/apexcharts/apexcharts.min.js')}}"></script>
@endsection

@section('content')

        <div class="row velmld-parent">
            <div class="col-12">
                <div class="db-breadcrumb">
                    <ul class="db-breadcrumb-list">
                        <li class="db-breadcrumb-item"><a href="#/admin/dashboard"
                                class="db-breadcrumb-link">Dashboard</a></li>
                        <li class="db-breadcrumb-item"><span>Delivery Boys</span></li>
                    </ul>
                </div>
            </div>
            <div data-v-2964abc9="" data-v-61614be0="" class="velmld-full-screen velmld-overlay"
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
            <div data-v-61614be0="" class="col-12">
                <div data-v-61614be0="" class="db-card">
                    <div data-v-61614be0="" class="db-card-header border-none">
                        <h3 data-v-61614be0="" class="db-card-title">Delivery Boys</h3>
                        <div data-v-61614be0="" class="db-card-filter velmld-parent"><!--v-if--><button
                                data-v-61614be0="" class="db-card-filter-btn table-filter-btn"><i
                                    class="lab lab-filter lab-font-size-14"></i><span>Filter</span></button>
                            <div data-v-61614be0="" class="dropdown-group"><button data-v-61614be0=""
                                    class="db-card-filter-btn dropdown-btn"><i
                                        class="lab lab-file-export lab-font-size-17"></i><span>Export</span></button>
                                <div data-v-61614be0="" class="dropdown-list db-card-filter-dropdown-list"><button
                                        data-v-61614be0="" class="db-card-filter-dropdown-menu"><i
                                            class="lab lab-printer-line lab-font-size-17"></i> Print</button><a
                                        data-v-61614be0="" href="#" class="db-card-filter-dropdown-menu"><i
                                            class="lab lab-file-excel lab-font-size-15"></i> XLS</a></div>
                            </div>
                            <div data-v-2964abc9="" class="velmld-full-screen velmld-overlay"
                                style="background-color: rgba(255, 255, 255, 0.9); display: none;">
                                <div data-v-2964abc9="" class="velmld-spinner"><svg data-v-2964abc9=""
                                        data-v-2964abc9-s="" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="40px" height="40px" viewBox="0 0 24 30"
                                        xml:space="preserve">
                                        <rect x="0" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                begin="0s" dur="0.6s" repeatCount="indefinite"></animate>
                                        </rect>
                                        <rect x="8" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                begin="0.15s" dur="0.6s" repeatCount="indefinite"></animate>
                                        </rect>
                                        <rect x="16" y="10" width="4" height="10" fill="#696cff" opacity="0.2">
                                            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2"
                                                begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="height" attributeType="XML" values="10; 20; 10"
                                                begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                            <animate attributeName="y" attributeType="XML" values="10; 5; 10"
                                                begin="0.3s" dur="0.6s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </svg><!----></div>
                            </div><button data-drawer="#sidebar" class="db-btn h-[37px] text-white bg-primary"><i
                                    class="lab lab-add-circle-line"></i><span>Add Delivery Boy</span></button>
                            <div id="sidebar" class="drawer">
                                <div class="drawer-header">
                                    <h3 class="drawer-title">Delivery Boys</h3><button
                                        class="fa-solid fa-xmark close-btn"></button>
                                </div>
                                <div class="drawer-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-col-12 sm:form-col-6"><label for="name"
                                                    class="db-field-title required">Name</label><input
                                                    class="db-field-control" type="text" id="name"><!--v-if-->
                                            </div>
                                            <div class="form-col-12 sm:form-col-6"><label for="email"
                                                    class="db-field-title required">Email</label><input
                                                    class="db-field-control" type="text" id="email"><!--v-if-->
                                            </div>
                                            <div class="form-col-12 sm:form-col-6"><label for="phone"
                                                    class="text-xs capitalize mb-1 text-heading">Phone</label>
                                                <div class="db-field-control flex items-center">
                                                    <div class="w-fit flex-shrink-0 dropdown-group"><button type="button"
                                                            class="flex items-center gap-1 dropdown-btn">🇧🇩 <span
                                                                class="whitespace-nowrap flex-shrink-0 text-xs">+880</span><input
                                                                type="hidden" value="+880"></button></div><input
                                                        class="pl-2 text-sm w-full h-full" type="text" id="phone">
                                                </div><!--v-if-->
                                            </div>
                                            <div class="form-col-12 sm:form-col-6"><label class="db-field-title required"
                                                    for="active">Status</label>
                                                <div class="db-field-radio-group">
                                                    <div class="db-field-radio">
                                                        <div class="custom-radio"><input id="active" type="radio"
                                                                class="custom-radio-field" value="5"><span
                                                                class="custom-radio-span"></span></div><label
                                                            for="active" class="db-field-label">Active</label>
                                                    </div>
                                                    <div class="db-field-radio">
                                                        <div class="custom-radio"><input type="radio" id="inactive"
                                                                class="custom-radio-field" value="10"><span
                                                                class="custom-radio-span"></span></div><label
                                                            for="inactive" class="db-field-label">Inactive</label>
                                                    </div>
                                                </div><!--v-if-->
                                            </div>
                                            <div class="form-col-12 sm:form-col-6"><label for="password"
                                                    class="db-field-title required">Password</label><input
                                                    class="db-field-control" type="password" id="password"
                                                    autocomplete="off"><!--v-if--></div>
                                            <div class="form-col-12 sm:form-col-6"><label for="password_confirmation"
                                                    class="db-field-title required">Password Confirmation</label><input
                                                    class="db-field-control" type="password" id="password_confirmation"
                                                    autocomplete="off"><!--v-if--></div>
                                            <div class="form-col-12 sm:form-col-6"><label class="db-field-title required"
                                                    for="branch_id">Branch</label>
                                                <div class="db-field-radio-group">
                                                    <div class="db-field-radio">
                                                        <div class="custom-radio"><input class="custom-radio-field"
                                                                type="radio" id="current_branch" value="1"><span
                                                                class="custom-radio-span"></span></div><label
                                                            for="current_branch" class="db-field-label">Current
                                                            Branch</label>
                                                    </div>
                                                    <div class="db-field-radio">
                                                        <div class="custom-radio"><input class="custom-radio-field"
                                                                type="radio" id="all_branch" value="0"><span
                                                                class="custom-radio-span"></span></div><label
                                                            for="all_branch" class="db-field-label">All Branch</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-col-12">
                                                <div class="flex flex-wrap gap-3 mt-4"><button type="submit"
                                                        class="db-btn py-2 text-white bg-primary"><i
                                                            class="lab lab-save"></i><span>Save</span></button><button
                                                        type="button" class="modal-btn-outline modal-close"><i
                                                            class="lab lab-close"></i><span>Close</span></button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-61614be0="" class="table-filter-div">
                        <form data-v-61614be0="" class="p-4 sm:p-5 mb-5">
                            <div data-v-61614be0="" class="row">
                                <div data-v-61614be0="" class="col-12 sm:col-6 md:col-4 xl:col-3"><label
                                        data-v-61614be0="" for="searchName"
                                        class="db-field-title after:hidden">Name</label><input data-v-61614be0=""
                                        id="searchName" type="text" class="db-field-control"></div>
                                <div data-v-61614be0="" class="col-12 sm:col-6 md:col-4 xl:col-3"><label
                                        data-v-61614be0="" for="searchEmail"
                                        class="db-field-title after:hidden">Email</label><input data-v-61614be0=""
                                        id="searchEmail" type="text" class="db-field-control"></div>
                                <div data-v-61614be0="" class="col-12 sm:col-6 md:col-4 xl:col-3"><label
                                        data-v-61614be0="" for="searchPhone"
                                        class="db-field-title after:hidden">Phone</label><input data-v-61614be0=""
                                        id="searchPhone" type="text" class="db-field-control"></div>
                                <div data-v-61614be0="" class="col-12 sm:col-6 md:col-4 xl:col-3"><label
                                        data-v-61614be0="" for="searchStatus"
                                        class="db-field-title after:hidden">Status</label>
                                    <div data-v-61614be0=""
                                        class="vue-select direction-bottom db-field-control f-b-custom-select"
                                        tabindex="0" data-is-focusing="false" data-visible-length="2"
                                        data-not-selected-length="2" data-selected-length="0" data-addable="true"
                                        data-removable="false" data-total-length="2" data-multiple="false"
                                        data-loading="false" data-disabled="false" id="vs101-combobox" role="combobox"
                                        aria-expanded="false" aria-haspopup="listbox" aria-owns="vs101-listbox"
                                        aria-activedescendant="vs101-option-0" aria-busy="false" aria-disabled="false">
                                        <div class="vue-select-header"><!--v-if-->
                                            <div class="vue-input"><input autocomplete="off" modelvalue=""
                                                    placeholder="--" tabindex="0" aria-autocomplete="list"
                                                    aria-controls="vs101-listbox" aria-labelledby="vs101-combobox"></div>
                                            <span class="icon arrow-downward"></span>
                                        </div><!--v-if-->
                                        <ul class="vue-dropdown" data-is-focusing="false" data-visible-length="2"
                                            data-not-selected-length="2" data-selected-length="0" data-addable="true"
                                            data-removable="false" data-total-length="2" data-multiple="false"
                                            data-loading="false" data-disabled="false" role="listbox" id="vs101-listbox"
                                            aria-multiselectable="false" aria-busy="false" aria-disabled="false"
                                            style="max-height: 300px;">
                                            <li class="vue-dropdown-item highlighted" role="option" id="vs101-option-0"
                                                aria-selected="false"><span>Active</span></li>
                                            <li class="vue-dropdown-item" role="option" id="vs101-option-1"
                                                aria-selected="false"><span>Inactive</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div data-v-61614be0="" class="col-12 sm:col-6 md:col-4 xl:col-3"><label
                                        data-v-61614be0="" for="searchBranch"
                                        class="db-field-title after:hidden">Branch</label>
                                    <div data-v-61614be0=""
                                        class="vue-select direction-bottom db-field-control f-b-custom-select"
                                        tabindex="0" data-is-focusing="false" data-visible-length="2"
                                        data-not-selected-length="2" data-selected-length="0" data-addable="true"
                                        data-removable="false" data-total-length="2" data-multiple="false"
                                        data-loading="false" data-disabled="false" id="vs112-combobox" role="combobox"
                                        aria-expanded="false" aria-haspopup="listbox" aria-owns="vs112-listbox"
                                        aria-activedescendant="vs112-option-0" aria-busy="false" aria-disabled="false">
                                        <div class="vue-select-header"><!--v-if-->
                                            <div class="vue-input"><input autocomplete="off" modelvalue=""
                                                    placeholder="--" tabindex="0" aria-autocomplete="list"
                                                    aria-controls="vs112-listbox" aria-labelledby="vs112-combobox"></div>
                                            <span class="icon arrow-downward"></span>
                                        </div><!--v-if-->
                                        <ul class="vue-dropdown" data-is-focusing="false" data-visible-length="2"
                                            data-not-selected-length="2" data-selected-length="0" data-addable="true"
                                            data-removable="false" data-total-length="2" data-multiple="false"
                                            data-loading="false" data-disabled="false" role="listbox" id="vs112-listbox"
                                            aria-multiselectable="false" aria-busy="false" aria-disabled="false"
                                            style="max-height: 300px;">
                                            <li class="vue-dropdown-item highlighted" role="option" id="vs112-option-0"
                                                aria-selected="false"><span>Current Branch</span></li>
                                            <li class="vue-dropdown-item" role="option" id="vs112-option-1"
                                                aria-selected="false"><span>All Branch</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div data-v-61614be0="" class="col-12">
                                    <div data-v-61614be0="" class="flex flex-wrap gap-3 mt-4"><button data-v-61614be0=""
                                            class="db-btn py-2 text-white bg-primary"><i data-v-61614be0=""
                                                class="lab lab-search-line lab-font-size-16"></i><span
                                                data-v-61614be0="">Search</span></button><button data-v-61614be0=""
                                            class="db-btn py-2 text-white bg-gray-600"><i data-v-61614be0=""
                                                class="lab lab-cross-line-2 lab-font-size-22"></i><span
                                                data-v-61614be0="">Clear</span></button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div data-v-61614be0="" class="db-table-responsive">
                        <table data-v-61614be0="" class="db-table stripe" id="print">
                            <thead data-v-61614be0="" class="db-table-head">
                                <tr data-v-61614be0="" class="db-table-head-tr">
                                    <th data-v-61614be0="" class="db-table-head-th">Name</th>
                                    <th data-v-61614be0="" class="db-table-head-th">Email</th>
                                    <th data-v-61614be0="" class="db-table-head-th">Phone</th>
                                    <th data-v-61614be0="" class="db-table-head-th">Status</th>
                                    <th data-v-61614be0="" class="db-table-head-th hidden-print">Action</th>
                                </tr>
                            </thead>
                            <tbody data-v-61614be0="" class="db-table-body">
                                <tr data-v-61614be0="" class="db-table-body-tr">
                                    <td data-v-61614be0="" class="db-table-body-td">Heron Khan</td>
                                    <td data-v-61614be0="" class="db-table-body-td">heron@example.com</td>
                                    <td data-v-61614be0="" class="db-table-body-td">+8801256444333</td>
                                    <td data-v-61614be0="" class="db-table-body-td"><span data-v-61614be0=""
                                            class="db-table-badge text-green-600 bg-green-100">Active</span></td>
                                    <td data-v-61614be0="" class="db-table-body-td hidden-print">
                                        <div data-v-61614be0=""
                                            class="flex justify-start items-center sm:items-start sm:justify-start gap-1.5">
                                            <a data-v-61614be0="" href="#/admin/delivery-boys/show/5"
                                                class="db-table-action view"><i class="fa fa-eye"></i><span
                                                    class="db-tooltip">View</span></a><button data-v-61614be0=""
                                                data-modal="#sidebar" class="db-table-action edit"><i
                                                    class="fa fa-edit"></i><span
                                                    class="db-tooltip">Edit</span></button><button data-v-61614be0=""
                                                class="db-table-action delete"><i class="fa fa-trash"></i><span
                                                    class="db-tooltip">Delete</span></button></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div data-v-61614be0=""
                        class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-6">
                        <div data-v-61614be0="" class="flex flex-1 justify-between sm:hidden">
                            <!----><!--        <button type="button" @click="page(pagination.meta.form)"--><!--                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">--><!--            Previous--><!--        </button>--><!--        <button type="button" @click="page(pagination.meta.to)"--><!--                class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">--><!--            Next--><!--        </button>-->
                        </div>
                        <div data-v-61614be0="" class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                            <div data-v-61614be0="">
                                <p class="text-sm text-gray-700">Showing 1 to 2 of 2 entries</p>
                            </div>
                            <div data-v-61614be0=""><!----></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
