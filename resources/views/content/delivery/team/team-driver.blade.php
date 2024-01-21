@extends('layouts/layoutMaster')

@section('title', 'Add Cashier')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>
@endsection

@section('content')
    <div class="wrap">
        <div class="row g-0">
            <div class="card">
                <div class="card-header" style="border-bottom: solid 1px #ddd">
                    <div class="row justify-content-end">
                        <div class="col">
                            <h5 class="mt-2">Driver Boys</h5>
                        </div>
                        <div class="col ">
                            <div class="d-flex justify-content-end ">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalRight"><i class="bx bx-plus-circle me-2"></i>
                                    Add Driver Boy
                                </button>

                                <!-- Modal -->
                                <div class="modal fade modal-top" style="height: 100vh!important" id="modalRight"
                                    tabindex="-1">
                                    <div class="modal-dialog"
                                        style="position: fixed; top: 0px; right: 0px; z-index: 50; height: 100vh;
                                            width: 100%;  max-width: 40rem;">
                                        <form class="modal-content" style="height: 100vh">
                                            <div class="modal-header" style="border-bottom: solid 1px #ddd">
                                                <h5 class="modal-title mb-3" id="modalTopTitle">Driver Boy</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="overflow-y: scroll">
                                                <div class="row g-2 mt-1">
                                                    <div class="col-12 text-center mb-0 needsclick">

                                                        <img src="{{ asset('assets/img/avatars/1.png') }}"
                                                            click="window.alert('adgfasd');"
                                                            class="rounded-circle needsclick"
                                                            style="width: 80px; height: auto; border: 10px solid #ccc;"
                                                            alt="uplaod">
                                                        <div class="fallback">
                                                            <input type="file" id="avatar-input" class="d-none">
                                                        </div>
                                                        <div class="custom-file-input"
                                                            style="position: relative; overflow: hidden; display: inline-block;">
                                                            <input type="file" id="fileInput"
                                                                style="position: absolute; font-size: 100px; right: 0;  top: 0; opacity: 0;"
                                                                class="hidden-file-input">
                                                            <label for="fileInput" class="mt-2"
                                                                style="display: inline-block; background: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;
            cursor: pointer;">Upload
                                                                File</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Select Gender
                                                            *</label>
                                                        <select type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col mb-0">
                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Name</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="dobSlideTop" class="form-label">Last Name*</label>

                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Email</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col mb-0">

                                                        <label for="emailSlideTop" class="form-label">Repeat
                                                            Email</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">

                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Phone Number</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Repeat Phone
                                                            Number</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="working-type" class="form-label">Select working
                                                            type</label>
                                                        <select name="working-type" id="working-type"
                                                            class="form-control">
                                                            <option value="1">Full Time</option>
                                                            <option value="2">Part Time</option>
                                                            <option value="3">By Call</option>
                                                        </select>
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="Employee-type" class="form-label">Employee
                                                            type</label>
                                                        <select name="Employee-type" id="Employee-type"
                                                            class="form-control">
                                                            <option value="1">Student</option>
                                                            <option value="2">TeamLeader</option>
                                                            <option value="3">Friend</option>
                                                            <option value="4">Helper</option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row g-2 mt-3">
                                                    <div class="col mb-0">
                                                        <label for="password" class="form-label">password *</label>
                                                        <input type="password" id="password" class="form-control"
                                                            placeholder="">
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="password-comfirmation" class="form-label">password
                                                            confirmation *</label>
                                                        <input type="password" id="password-comfirmation"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group text-center p-2 mt-3">
                                                    <label class="me-2"> <input type="radio" id="active"
                                                            class="me-2" value="Active"> Active
                                                    </label>
                                                    <label> <input type="radio" id="inactive" class="me-2"
                                                            value="Active"> Inactive
                                                    </label>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="bx bx-save me-2"></i>Save</button>
                                                <button type="button" class="btn btn-label-secondary"
                                                    data-bs-dismiss="modal"><i class="bx bx-x me-2"></i>Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Showing to of entries</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="app-overlay"></div>
        </div>
    </div>
@endsection
