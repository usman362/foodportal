@extends('layouts/layoutMaster')

@section('title', 'POS System')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/app-chat.css') }}" />
    <style>
        button.btn.add-fd-cat-btn {
            background-color: white;
            font-size: 14px !important;
            display: block;
            margin-bottom: 10px;
            position: relative;
            /* Adjust the margin as needed */
        }

        button.btn.add-fd-cat-btn span {
            font-size: 10px;
            color: rgba(0, 0, 0, 0.60);
        }

        button.btn.add-fd-cat-btn span span {
            color: rgb(183 183 183)
        }

        .pos-menu-detail {
            position: relative;
            height: 85vh;
        }

        .pos-menu-item {
            background-image: url('{{ asset('assets/img/pos/burger-cover-sm.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            margin: 4px 0;
            text-align: center;
        }

        .pos-menu-item h4 {
            margin: 0;
            color: #fff;
        }

        .pos-menu-item p {
            font-size: 14px;
            color: #fff;
        }

        .pos-menu-back-drop {
            padding: 12px;
            background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.79) 47.92%, rgba(0, 0, 0, 0.00) 100%);
            position: relative;
        }

        button.pos-edit-menu {
            position: absolute;
            right: 4px;
            top: 4px;
            background: transparent;
            color: #fff;
            border: none;
        }

        button.pos-remove-menu {
            position: absolute;
            left: 4px;
            top: 4px;
            background: transparent;
            color: #fff;
            border: none;
        }

        .pos-menu-detail-footer {
            position: absolute;
            background: #f1f0f0;
            text-align: center;
            bottom: 0;
            padding: 16px 0;
            width: 100%;
        }

        .add-new-item {
            background-color: transparent;
            color: black;
            box-shadow: none;
            border: 1px solid #F2F2F2 !important;
            border-radius: 24px;
        }

        .add-food-extra {
            color: black;
            box-shadow: none;
            border: 1px solid #F2F2F2 !important;
            background: #F2F2F2;
            border-radius: 24px;
            margin: 0 auto;
        }
        .category-item-img{
          width: 72px;
          height: 62px;
        }
        .category-item-number{
          color: #49A82C;
          text-align: center;
          font-family: Poppins;
          font-size: 10px;
          background-color: #f1f2f2;
          font-size: 10px;
          font-style: normal;
          font-weight: 500;
          line-height: normal;
        }

        .pos-category-list h4{
          color: #000;
          font-family: Poppins;
          font-size: 14px;
          font-style: normal;
          font-weight: 600;
          line-height: normal;
          margin: 0;
          letter-spacing: 0.28px;
        }
        .pos-category-list sub{
          color: rgba(0, 0, 0, 0.60);
          font-family: Poppins;
          font-size: 12px;
          font-style: normal;
          font-weight: 400;
          line-height: 12px; /* 100% */
        }
        .pos-category-list .item-variation-list{
          display: flex;
          align-items: center;
          gap: 8px;
        }
        .pos-category-list .item-variation  .pill{
          color: #1C274C;
          text-align: center;
          font-family: Poppins;
          font-size: 10px;
          background-color: #f1f2f2;
          padding: 2px 6px;
          font-style: normal;
          font-weight: 500;
          line-height: normal;
        }
        .pos-category-list .item-variation  sub{
          color: rgba(0, 0, 0, 0.60);
          font-family: Poppins;
          font-size: 10px;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
          letter-spacing: 0.2px;
        }
        .pos-action-item{
          position: relative;
          width: 100%;
        }

        .pos-action-item svg{
          width: 100%;
        }

        .pos-action-item p{
          color: #1C274C;
          font-size: 12px;
          font-style: normal;
          font-weight: 400;
          line-height: normal;
          letter-spacing: 0.24px;
          text-align: center;
          margin-top: -30px
        }
        .move-textbox{
          position: relative;
        }
        .move-textbox label{
          position: absolute;
          left: 12px;
          top: -11px;
          background-color: #fff;
        }

        .modal-content .removeAlert{
          position: absolute;
          left: 234px;
          padding: 20px;
          top: -36px;
          background-color: #fff;
          border-radius: 52px;
          border: 2px solid #00000012;
        }
        #removeCategory .modal-content .btn:first-child{
          position: absolute;
          left:10px;
        }
        .btn-radius{
          border-radius: 20px
        }
        .double-toggle-switch{
          background-color: #f8f8f8;
          padding: 4px;
          border-radius: 30px;
          width: 280px;
          margin: 0 auto;
        }

        .double-toggle-switch .btn.active{
          background-color: #5f9de3;
          color: #fff;
          border-radius: 26px;
        }
        .double-toggle-switch .btn{
          background-color: #f8f8f8;
          color: #000;
          border-radius: 26px;
        }
        .upload-image{
          border-radius: 10px;
          border: 1px dashed #A8A8A8;
          background: #ECECEC;
          padding: 30px;
          margin-top: 12px;
          width: 100%;
          cursor: pointer;
        }
        .upload-image h4{
          text-align: center;
          font-family: Poppins;
          font-size: 16px;
          font-style: normal;
          font-weight: 400;
          line-height: 2;
          letter-spacing: 0.2px;
        }

        .select-image input[type='radio'] {
          display: none;
        }
        .select-image .radio-collection {
        display: flex;
        flex-direction: row;
        width: 50%;
        margin: 12px 0;}
        .select-image .radio-collection > span { flex: 1 1 auto; display: block; }
        .select-image label { color:#1C274C;opacity: 0.5;flex: 1 1 auto; border: solid 1px #888;border-radius: 60px; margin:0 12px;cursor: pointer; display: block; padding: 0 12px; }
        .select-image :checked + label { border: 1px solid #1BC469;
        background: rgba(27, 196, 105, 0.10);}

        .foodType{
          background-color: #fff;
          padding: 8px;
          margin: 0px 6px;
        }

        .justify-center{
          justify-content: center;
        }

        #addItem h4{
          font-size: 18px;
        }

        .item-type-section{
          background-color: #F5F5F5;
          padding: 14px 8px;
        }

        .itemTypeGrid{
          margin: 4px auto;

        }

        .itemTypeGrid .col-md-4{
          padding: 6px 0;
          font-size: 12px;
          margin: 2px;
          cursor: pointer;
        }

        #addFoodExtra .modal-header{
          display: unset;
          text-align: center;
        }

        .addSize{
          display: flex;
          margin-top: 10px;
          border: 1px solid #00000008;
        }
        .addSize .size {
              border: none;
              background-color: #F2F2F2;
              height: 24px;
              font-size: 12px;
          }

          .addSize .maxAdd {
              border: none;
              background-color: #fff;
              height: 24px;
          }
          .addSize input[type="text"] {
              border: none;
              background-color: #fff;
              height: 24px;
              outline: none;
              width: 70px;
          }

          .addSize .maxAddLabel {
              font-size: 12px;
              margin: auto 2px;
              padding: 2px;
              background-color: #F2F2F2;
          }

          .addSize .addPriceLabel {
              font-size: 12px;
              margin: auto 2px;
              padding: 2px;
              background-color: #F2F2F2;
          }
          .add-item{
            display: flex;
            margin-top: 4px;
          }

          .add-item span {
              padding: 2px 14px;
              background-color: #F2F2F2;
              margin-left: 2px;
              font-size: 12px;
              width: 75px;
            }

            .add-item input[type="text"] {
                outline: none;
                border: none;
                width: 70px;
            }

            .add-item svg {margin: auto;}

            .add-item label {
                font-size: 14px;
                margin:auto 0;
                width: 100px;
            }

          .foodExtras .radio-collection {
              display: flex;
              flex-direction: row;
              width: 100%;
              margin: 12px 0;}
          .foodExtras .radio-collection > span { flex: 1 1 auto; display: block; }
          .foodExtras label {
            color: #1C274C;
            flex: 1 1 auto;
            border-radius: 7px;
            margin: 0 4px;
            cursor: pointer;
            display: block;
            font-size: 16px;
            text-align: center;
            padding: 4px 12px;
            background-color: #f2f2f2;
          }
          .foodExtras :checked + label {
            background: #1bc469;
            color: #fff;
          }
          .foodExtras input[type='radio'] {
            display: none;
          }

          .foodCategories .accordion-item{
            position: relative;
          }

          .foodCategories .quantity{
            position: absolute;
            font-size: 12px;
            top: 36px;
            left: 20px;
            z-index: 100;
          }

          .foodCategories .btn-checkbox{
            position: absolute;
            top: 12px;
            right: 40px;
          }

          .foodCategories input[type="checkbox"]{
            margin-right: 6px;
          }

          .foodCategories .accordion-body{
            background-color: #f2f2f2;
          }


          @media (min-width: 992px){
            .modal-lg, .modal-xl {
                --bs-modal-width: 65rem !important;
            }
            #addFoodExtra .modal-lg {
                --bs-modal-width: 80rem !important;
            }
          }

          @media (min-width: 768px){
            .itemTypeGrid .col-md-4{
              width: 31.333333%;
            }
          }

    </style>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>


    <script>
      $(document).ready(function(){
        $('.image-switch').click(function(){
          $('.image-switch').removeClass('active');
          $(this).addClass('active');
          if($(this).attr('data-value') == 'upload'){
            $('.select-image').css('display','none');
            $('.upload-image').css('display','block');
          }else{
            $('.select-image').css('display','block');
            $('.upload-image').css('display','none');
          }
        });
      });
    </script>
@endsection

@section('content')
    <div class="wrap">
        <div class="row g-0">
            <div class="col-md-4">

                <div class="pos-menu-detail">

                    <center>
                        <button class="btn add-fd-cat-btn" data-bs-toggle="modal" data-bs-target="#createCategory">
                            <div>Add Food Category</div>
                            <span>.Total Category.<span>10</span>.</span>
                        </button>
                    </center>

                    <div class="pos-menu-list">
                        <div class="pos-menu-item">
                            <div class="pos-menu-back-drop">
                                <button class="pos-edit-menu"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="14" viewBox="0 0 12 14" fill="none">
                                        <path d="M1 13.5H11" stroke="white" stroke-linecap="round" />
                                        <path
                                            d="M7.64347 1.57589L7.18003 2.03933L2.91941 6.29995C2.63083 6.58853 2.48654 6.73282 2.36245 6.89192C2.21607 7.07959 2.09057 7.28265 1.98817 7.49751C1.90137 7.67965 1.83684 7.87324 1.70778 8.26041L1.1609 9.90104L1.02722 10.3021C0.963714 10.4926 1.0133 10.7027 1.15532 10.8447C1.29733 10.9867 1.50739 11.0363 1.69792 10.9728L2.09896 10.8391L3.73959 10.2922C4.12676 10.1632 4.32035 10.0986 4.50249 10.0118C4.71735 9.90943 4.92041 9.78393 5.10808 9.63755C5.26718 9.51346 5.41146 9.36917 5.70003 9.0806L5.70005 9.08059L9.96067 4.81997L10.4241 4.35653C11.192 3.58868 11.192 2.34374 10.4241 1.57589C9.65626 0.808037 8.41132 0.808037 7.64347 1.57589Z"
                                            stroke="white" />
                                        <path opacity="0.5"
                                            d="M7.18026 2.03943C7.18026 2.03943 7.23819 3.02424 8.10714 3.89319C8.97609 4.76214 9.9609 4.82007 9.9609 4.82007M2.09919 10.8392L1.16113 9.90114"
                                            stroke="white" />
                                    </svg></button>
                                <button class="pos-remove-menu"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="15" viewBox="0 0 14 15" fill="none">
                                        <path opacity="0.5"
                                            d="M9.66667 2.33331C11.1167 2.34138 11.902 2.40568 12.4142 2.91794C13 3.50373 13 4.44654 13 6.33215V10.3322C13 12.2178 13 13.1606 12.4142 13.7464C11.8284 14.3322 10.8856 14.3322 9 14.3322H5C3.11438 14.3322 2.17157 14.3322 1.58579 13.7464C1 13.1606 1 12.2178 1 10.3322V6.33215C1 4.44654 1 3.50373 1.58579 2.91794C2.09804 2.40568 2.88332 2.34138 4.33333 2.33331"
                                            stroke="white" />
                                        <path
                                            d="M4.33325 2C4.33325 1.44772 4.78097 1 5.33325 1H8.66659C9.21887 1 9.66658 1.44772 9.66658 2V2.66667C9.66658 3.21895 9.21887 3.66667 8.66659 3.66667H5.33325C4.78097 3.66667 4.33325 3.21895 4.33325 2.66667V2Z"
                                            stroke="white" />
                                        <path d="M8.66672 7.00003L5.3334 10.3333M5.33339 7.00001L8.66671 10.3333"
                                            stroke="white" stroke-linecap="round" />
                                    </svg></button>
                                <h4>Burger Menu</h4>
                                <p>. All Pizza with Cheese and Tomato .</p>
                            </div>
                        </div>
                        <div class="pos-menu-item">
                            <div class="pos-menu-back-drop">
                                <button class="pos-edit-menu"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="14" viewBox="0 0 12 14" fill="none">
                                        <path d="M1 13.5H11" stroke="white" stroke-linecap="round" />
                                        <path
                                            d="M7.64347 1.57589L7.18003 2.03933L2.91941 6.29995C2.63083 6.58853 2.48654 6.73282 2.36245 6.89192C2.21607 7.07959 2.09057 7.28265 1.98817 7.49751C1.90137 7.67965 1.83684 7.87324 1.70778 8.26041L1.1609 9.90104L1.02722 10.3021C0.963714 10.4926 1.0133 10.7027 1.15532 10.8447C1.29733 10.9867 1.50739 11.0363 1.69792 10.9728L2.09896 10.8391L3.73959 10.2922C4.12676 10.1632 4.32035 10.0986 4.50249 10.0118C4.71735 9.90943 4.92041 9.78393 5.10808 9.63755C5.26718 9.51346 5.41146 9.36917 5.70003 9.0806L5.70005 9.08059L9.96067 4.81997L10.4241 4.35653C11.192 3.58868 11.192 2.34374 10.4241 1.57589C9.65626 0.808037 8.41132 0.808037 7.64347 1.57589Z"
                                            stroke="white" />
                                        <path opacity="0.5"
                                            d="M7.18026 2.03943C7.18026 2.03943 7.23819 3.02424 8.10714 3.89319C8.97609 4.76214 9.9609 4.82007 9.9609 4.82007M2.09919 10.8392L1.16113 9.90114"
                                            stroke="white" />
                                    </svg></button>
                                <button class="pos-remove-menu"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="15" viewBox="0 0 14 15" fill="none">
                                        <path opacity="0.5"
                                            d="M9.66667 2.33331C11.1167 2.34138 11.902 2.40568 12.4142 2.91794C13 3.50373 13 4.44654 13 6.33215V10.3322C13 12.2178 13 13.1606 12.4142 13.7464C11.8284 14.3322 10.8856 14.3322 9 14.3322H5C3.11438 14.3322 2.17157 14.3322 1.58579 13.7464C1 13.1606 1 12.2178 1 10.3322V6.33215C1 4.44654 1 3.50373 1.58579 2.91794C2.09804 2.40568 2.88332 2.34138 4.33333 2.33331"
                                            stroke="white" />
                                        <path
                                            d="M4.33325 2C4.33325 1.44772 4.78097 1 5.33325 1H8.66659C9.21887 1 9.66658 1.44772 9.66658 2V2.66667C9.66658 3.21895 9.21887 3.66667 8.66659 3.66667H5.33325C4.78097 3.66667 4.33325 3.21895 4.33325 2.66667V2Z"
                                            stroke="white" />
                                        <path d="M8.66672 7.00003L5.3334 10.3333M5.33339 7.00001L8.66671 10.3333"
                                            stroke="white" stroke-linecap="round" />
                                    </svg></button>
                                <h4>Burger Menu</h4>
                                <p>. All Pizza with Cheese and Tomato .</p>
                            </div>
                        </div>
                        <div class="pos-menu-item">
                            <div class="pos-menu-back-drop">
                                <button class="pos-edit-menu"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="14" viewBox="0 0 12 14" fill="none">
                                        <path d="M1 13.5H11" stroke="white" stroke-linecap="round" />
                                        <path
                                            d="M7.64347 1.57589L7.18003 2.03933L2.91941 6.29995C2.63083 6.58853 2.48654 6.73282 2.36245 6.89192C2.21607 7.07959 2.09057 7.28265 1.98817 7.49751C1.90137 7.67965 1.83684 7.87324 1.70778 8.26041L1.1609 9.90104L1.02722 10.3021C0.963714 10.4926 1.0133 10.7027 1.15532 10.8447C1.29733 10.9867 1.50739 11.0363 1.69792 10.9728L2.09896 10.8391L3.73959 10.2922C4.12676 10.1632 4.32035 10.0986 4.50249 10.0118C4.71735 9.90943 4.92041 9.78393 5.10808 9.63755C5.26718 9.51346 5.41146 9.36917 5.70003 9.0806L5.70005 9.08059L9.96067 4.81997L10.4241 4.35653C11.192 3.58868 11.192 2.34374 10.4241 1.57589C9.65626 0.808037 8.41132 0.808037 7.64347 1.57589Z"
                                            stroke="white" />
                                        <path opacity="0.5"
                                            d="M7.18026 2.03943C7.18026 2.03943 7.23819 3.02424 8.10714 3.89319C8.97609 4.76214 9.9609 4.82007 9.9609 4.82007M2.09919 10.8392L1.16113 9.90114"
                                            stroke="white" />
                                    </svg></button>
                                <button class="pos-remove-menu"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                        height="15" viewBox="0 0 14 15" fill="none">
                                        <path opacity="0.5"
                                            d="M9.66667 2.33331C11.1167 2.34138 11.902 2.40568 12.4142 2.91794C13 3.50373 13 4.44654 13 6.33215V10.3322C13 12.2178 13 13.1606 12.4142 13.7464C11.8284 14.3322 10.8856 14.3322 9 14.3322H5C3.11438 14.3322 2.17157 14.3322 1.58579 13.7464C1 13.1606 1 12.2178 1 10.3322V6.33215C1 4.44654 1 3.50373 1.58579 2.91794C2.09804 2.40568 2.88332 2.34138 4.33333 2.33331"
                                            stroke="white" />
                                        <path
                                            d="M4.33325 2C4.33325 1.44772 4.78097 1 5.33325 1H8.66659C9.21887 1 9.66658 1.44772 9.66658 2V2.66667C9.66658 3.21895 9.21887 3.66667 8.66659 3.66667H5.33325C4.78097 3.66667 4.33325 3.21895 4.33325 2.66667V2Z"
                                            stroke="white" />
                                        <path d="M8.66672 7.00003L5.3334 10.3333M5.33339 7.00001L8.66671 10.3333"
                                            stroke="white" stroke-linecap="round" />
                                    </svg></button>
                                <h4>Burger Menu</h4>
                                <p>. All Pizza with Cheese and Tomato .</p>
                            </div>
                        </div>
                    </div>

                    <div class="pos-menu-detail-footer">
                        <p class="m-0">. Total Category . 10 . Total Items . 150 .</p>
                        <p class="m-0">. Amount Total .10.250 €.</p>
                    </div>

                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="border-bottom: solid 1px #ddd">
                        <div class="row justify-content-end">
                            <div class="col">
                                <h5 class="mt-2 mb-0">Catgeory Name</h5>
                                <sub>. Total Items .152.</sub>
                            </div>
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn add-new-item" data-bs-toggle="modal"
                                    data-bs-target="#addItem">
                                    Add New Item
                                </button>
                            </div>

                            <div class="col">
                                <div class="d-flex justify-content-end">

                                    <button type="button" class="btn add-food-extra" data-bs-toggle="modal"
                                        data-bs-target="#addFoodExtra">
                                        Add Food Extra
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive text-nowrap">
                        <table class="table pos-category-list">
                            <tbody>
                                <tr>
                                    <td><img class="category-item-img" src="{{asset('assets/img/pos/burger-item.png')}}"></td>
                                    <td><div class="category-item-number">101</div></td>
                                    <td><h4>Schezwan Margherita</h4>
                                    <sub>. Cheese,  Onion, Salami .</sub>
                                    </td>
                                    <td>
                                      <div class="item-variation-list">
                                      <div class="item-variation">
                                        <div class="pill">Standard</div>
                                        <sub>$ 19,88</sub>
                                      </div>
                                      <div class="item-variation">
                                        <div class="pill">Size M</div>
                                        <sub>$ 19,88</sub>
                                      </div>
                                      <div class="item-variation">
                                        <div class="pill">Size L</div>
                                        <sub>$ 19,88</sub>
                                      </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex">
                                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                                          <circle opacity="0.5" cx="5.68869" cy="5.5" r="5" stroke="#1C274C" stroke-width="0.7"/>
                                          <path d="M5.68869 3V6" stroke="#1C274C" stroke-width="0.7" stroke-linecap="round"/>
                                          <circle cx="5.68869" cy="7.5" r="0.5" fill="#1C274C"/>
                                        </svg>
                                        <sub>1-A-3</sub>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="17" viewBox="0 0 36 17" fill="none">
                                          <path d="M8.38331 0.75C4.10819 0.75 0.643311 4.22575 0.643311 8.5C0.643311 12.7742 4.10819 16.25 8.38331 16.25C12.6584 16.25 16.1233 12.7742 16.1233 8.5C16.1233 4.22575 12.6584 0.75 8.38331 0.75Z" fill="white" stroke="#F2F2F2" stroke-width="0.5"/>
                                          <path d="M27.358 0.75C23.0829 0.75 19.618 4.22575 19.618 8.5C19.618 12.7742 23.0829 16.25 27.358 16.25C31.6331 16.25 35.098 12.7742 35.098 8.5C35.098 4.22575 31.6331 0.75 27.358 0.75Z" fill="white" stroke="#F2F2F2" stroke-width="0.5"/>
                                          <path opacity="0.5" d="M13.6551 7.96487L12.4888 6.79662V5.14545C12.4885 4.94491 12.4089 4.75265 12.2672 4.61085C12.1256 4.46905 11.9336 4.38928 11.7333 4.38904H10.0838L8.91763 3.22114C8.77577 3.07952 8.58362 3 8.3833 3C8.18298 3 7.99084 3.07952 7.84898 3.22114L6.68261 4.38904H5.03327C4.83299 4.38928 4.64099 4.46905 4.49937 4.61085C4.35775 4.75265 4.27809 4.94491 4.27785 5.14545V6.79716L3.11149 7.96488C2.97006 8.10693 2.89064 8.29933 2.89064 8.49991C2.89064 8.70049 2.97006 8.89289 3.11149 9.03494L4.27785 10.2024V11.8544C4.27809 12.0549 4.35775 12.2472 4.49937 12.389C4.64099 12.5308 4.83299 12.6105 5.03327 12.6108H6.68353L7.84898 13.7787C7.99082 13.9203 8.18298 13.9999 8.38331 13.9999C8.58364 13.9999 8.7758 13.9203 8.91764 13.7787L10.0852 12.6108H11.7333C11.9336 12.6105 12.1256 12.5308 12.2672 12.389C12.4089 12.2472 12.4885 12.0549 12.4888 11.8544V10.2027L13.6551 9.03493C13.7966 8.89288 13.876 8.70048 13.876 8.4999C13.876 8.29932 13.7966 8.10692 13.6551 7.96487ZM13.3777 8.75716L12.4888 9.64714V8.02358C12.4881 7.97193 12.4671 7.92264 12.4304 7.88637C12.3937 7.85009 12.3442 7.82975 12.2926 7.82975C12.241 7.82975 12.1915 7.85009 12.1548 7.88637C12.1181 7.92264 12.0971 7.97193 12.0964 8.02358V11.8544C12.0963 11.9507 12.058 12.0431 11.9899 12.1113C11.9219 12.1795 11.8296 12.2178 11.7333 12.2179H10.4779L11.5922 11.1033C11.6278 11.0662 11.6475 11.0167 11.647 10.9652C11.6465 10.9138 11.6259 10.8645 11.5895 10.8282C11.5532 10.7918 11.504 10.7711 11.4527 10.7706C11.4013 10.7702 11.3517 10.7899 11.3147 10.8256C11.3049 10.8312 9.8691 12.2746 9.86071 12.28L8.64022 13.5009C8.57197 13.5689 8.4796 13.6071 8.38331 13.6071C8.28702 13.6071 8.19465 13.5689 8.12639 13.5009L7.23814 12.6108H8.80498C8.85656 12.6101 8.90579 12.5891 8.94201 12.5523C8.97824 12.5155 8.99855 12.466 8.99855 12.4143C8.99855 12.3627 8.97824 12.3131 8.94201 12.2763C8.90579 12.2396 8.85656 12.2186 8.80498 12.2179H5.03327C4.93701 12.2178 4.84473 12.1795 4.77667 12.1113C4.7086 12.0431 4.67032 11.9507 4.67022 11.8544V10.5952L5.78429 11.7103C5.82131 11.746 5.87084 11.7657 5.92222 11.7652C5.9736 11.7647 6.02274 11.744 6.05908 11.7077C6.09541 11.6713 6.11604 11.6221 6.11653 11.5706C6.11702 11.5192 6.09733 11.4696 6.06169 11.4325L3.3889 8.75716C3.3209 8.68886 3.28272 8.59635 3.28272 8.4999C3.28272 8.40346 3.3209 8.31095 3.3889 8.24265L4.27785 7.35267V8.91887C4.27785 8.97097 4.29852 9.02094 4.33531 9.05778C4.37211 9.09462 4.42201 9.11532 4.47404 9.11532C4.52607 9.11532 4.57597 9.09462 4.61276 9.05778C4.64955 9.02094 4.67022 8.97097 4.67022 8.91887V5.14545C4.67032 5.04907 4.7086 4.95666 4.77667 4.88851C4.84473 4.82035 4.93702 4.78202 5.03327 4.78192H6.29025L5.26471 5.80882C5.22915 5.84591 5.20954 5.89547 5.21006 5.94688C5.21059 5.99828 5.23122 6.04743 5.26752 6.08378C5.30383 6.12013 5.35291 6.14078 5.40425 6.14131C5.45559 6.14183 5.50509 6.12219 5.54212 6.08658C5.54355 6.08505 6.90206 4.72494 6.90339 4.72353L8.12639 3.49892C8.19465 3.43091 8.28702 3.39274 8.3833 3.39274C8.47959 3.39274 8.57196 3.43091 8.64022 3.49892L9.52903 4.38904H7.97753C7.92596 4.38973 7.87673 4.41073 7.8405 4.4475C7.80428 4.48426 7.78397 4.53383 7.78397 4.58548C7.78397 4.63713 7.80428 4.6867 7.8405 4.72346C7.87673 4.76022 7.92596 4.78123 7.97753 4.78192H11.7333C11.8296 4.78202 11.9219 4.82036 11.99 4.88851C12.058 4.95666 12.0963 5.04907 12.0964 5.14545V6.40362L11.0716 5.37719C11.0346 5.34149 10.9851 5.32176 10.9337 5.32224C10.8823 5.32273 10.8331 5.34339 10.7968 5.37978C10.7604 5.41617 10.7398 5.46539 10.7393 5.51685C10.7389 5.56831 10.7586 5.61791 10.7942 5.65498L12.1244 6.98728C12.1416 7.01789 12.1669 7.04321 12.1975 7.06051L13.3777 8.24265C13.4457 8.31095 13.4839 8.40346 13.4839 8.4999C13.4839 8.59635 13.4457 8.68886 13.3777 8.75716Z" fill="#1C274C"/>
                                          <path d="M9.43726 9.29285L11.1563 9.16163C11.201 9.15726 11.2428 9.13777 11.2749 9.10638C11.307 9.075 11.3274 9.03359 11.3328 8.989C11.3382 8.94441 11.3283 8.89931 11.3046 8.86115C11.281 8.82298 11.245 8.79404 11.2027 8.77911C10.9981 8.69183 10.8225 8.54804 10.6965 8.36455C10.359 7.89793 9.65756 7.96636 9.62504 7.96953L9.62482 7.96956C9.57379 7.97585 9.52727 8.00196 9.49526 8.04225C9.46325 8.08254 9.44832 8.1338 9.45367 8.185C9.45901 8.23621 9.48422 8.28326 9.52386 8.31605C9.5635 8.34884 9.61441 8.36474 9.66564 8.36032C9.6708 8.35937 10.1743 8.31237 10.3789 8.59513C10.4349 8.6727 10.4972 8.74552 10.5651 8.81287L9.42232 8.90054C9.34566 8.90053 9.27214 8.87006 9.2179 8.81582C9.16366 8.76158 9.13313 8.68801 9.13303 8.61125V6.90429C9.13199 6.85508 9.11258 6.80804 9.07862 6.77246C9.04465 6.73688 8.9986 6.71534 8.94955 6.71209C8.9005 6.70884 8.85202 6.72412 8.81367 6.75491C8.77532 6.78569 8.74988 6.82976 8.74238 6.8784C8.70571 7.17156 8.63883 7.46013 8.54283 7.7395L7.89137 6.98794C7.85695 6.94976 7.80895 6.92663 7.75769 6.9235C7.70642 6.92038 7.65598 6.93751 7.61719 6.97123C7.5784 7.00494 7.55437 7.05255 7.55026 7.10381C7.54615 7.15507 7.56228 7.20591 7.59519 7.24539L8.37001 8.13927C8.04515 8.75384 7.6493 8.90052 7.62143 8.90995C7.57764 8.92496 7.54054 8.95495 7.51664 8.99464C7.49274 9.03434 7.48358 9.08119 7.49077 9.12698C7.49795 9.17276 7.52102 9.21455 7.55592 9.24499C7.59082 9.27543 7.63532 9.29258 7.6816 9.29343C7.7985 9.27386 8.28318 9.12956 8.74068 8.27576L8.74066 8.61126C8.74119 8.70197 8.75968 8.79167 8.79507 8.87517C8.83046 8.95866 8.88204 9.0343 8.94684 9.0977C9.01163 9.16109 9.08834 9.21098 9.17252 9.24448C9.2567 9.27798 9.34669 9.29442 9.43726 9.29285Z" fill="#5CD1FD"/>
                                          <path d="M7.07292 8.87158V6.9043C7.07292 6.8522 7.05225 6.80223 7.01546 6.76539C6.97867 6.72855 6.92877 6.70786 6.87674 6.70786C6.82471 6.70786 6.77481 6.72855 6.73802 6.76539C6.70123 6.80223 6.68056 6.8522 6.68056 6.9043V8.87158C6.67918 8.98642 6.63265 9.09609 6.55106 9.17681C6.46947 9.25753 6.35939 9.3028 6.2447 9.30279C6.13 9.30279 6.01992 9.25752 5.93834 9.1768C5.85675 9.09608 5.81022 8.98641 5.80885 8.87156V8.65058C5.80812 8.59897 5.78713 8.54971 5.75042 8.51346C5.71371 8.47722 5.66422 8.4569 5.61267 8.4569C5.56111 8.4569 5.51163 8.47722 5.47492 8.51346C5.4382 8.54971 5.41721 8.59897 5.41648 8.65058V8.87158C5.41648 9.09153 5.50374 9.30246 5.65906 9.45799C5.81439 9.61351 6.02505 9.70089 6.2447 9.70089C6.46436 9.70089 6.67502 9.61351 6.83034 9.45799C6.98566 9.30246 7.07292 9.09153 7.07292 8.87158Z" fill="#5CD1FD"/>
                                          <path opacity="0.5" d="M13.6551 7.96487L12.4888 6.79662V5.14545C12.4885 4.94491 12.4089 4.75265 12.2672 4.61085C12.1256 4.46905 11.9336 4.38928 11.7333 4.38904H10.0838L8.91763 3.22114C8.77577 3.07952 8.58362 3 8.3833 3C8.18298 3 7.99084 3.07952 7.84898 3.22114L6.68261 4.38904H5.03327C4.83299 4.38928 4.64099 4.46905 4.49937 4.61085C4.35775 4.75265 4.27809 4.94491 4.27785 5.14545V6.79716L3.11149 7.96488C2.97006 8.10693 2.89064 8.29933 2.89064 8.49991C2.89064 8.70049 2.97006 8.89289 3.11149 9.03494L4.27785 10.2024V11.8544C4.27809 12.0549 4.35775 12.2472 4.49937 12.389C4.64099 12.5308 4.83299 12.6105 5.03327 12.6108H6.68353L7.84898 13.7787C7.99082 13.9203 8.18298 13.9999 8.38331 13.9999C8.58364 13.9999 8.7758 13.9203 8.91764 13.7787L10.0852 12.6108H11.7333C11.9336 12.6105 12.1256 12.5308 12.2672 12.389C12.4089 12.2472 12.4885 12.0549 12.4888 11.8544V10.2027L13.6551 9.03493C13.7966 8.89288 13.876 8.70048 13.876 8.4999C13.876 8.29932 13.7966 8.10692 13.6551 7.96487ZM13.3777 8.75716L12.4888 9.64714V8.02358C12.4881 7.97193 12.4671 7.92264 12.4304 7.88637C12.3937 7.85009 12.3442 7.82975 12.2926 7.82975C12.241 7.82975 12.1915 7.85009 12.1548 7.88637C12.1181 7.92264 12.0971 7.97193 12.0964 8.02358V11.8544C12.0963 11.9507 12.058 12.0431 11.9899 12.1113C11.9219 12.1795 11.8296 12.2178 11.7333 12.2179H10.4779L11.5922 11.1033C11.6278 11.0662 11.6475 11.0167 11.647 10.9652C11.6465 10.9138 11.6259 10.8645 11.5895 10.8282C11.5532 10.7918 11.504 10.7711 11.4527 10.7706C11.4013 10.7702 11.3517 10.7899 11.3147 10.8256C11.3049 10.8312 9.8691 12.2746 9.86071 12.28L8.64022 13.5009C8.57197 13.5689 8.4796 13.6071 8.38331 13.6071C8.28702 13.6071 8.19465 13.5689 8.12639 13.5009L7.23814 12.6108H8.80498C8.85656 12.6101 8.90579 12.5891 8.94201 12.5523C8.97824 12.5155 8.99855 12.466 8.99855 12.4143C8.99855 12.3627 8.97824 12.3131 8.94201 12.2763C8.90579 12.2396 8.85656 12.2186 8.80498 12.2179H5.03327C4.93701 12.2178 4.84473 12.1795 4.77667 12.1113C4.7086 12.0431 4.67032 11.9507 4.67022 11.8544V10.5952L5.78429 11.7103C5.82131 11.746 5.87084 11.7657 5.92222 11.7652C5.9736 11.7647 6.02274 11.744 6.05908 11.7077C6.09541 11.6713 6.11604 11.6221 6.11653 11.5706C6.11702 11.5192 6.09733 11.4696 6.06169 11.4325L3.3889 8.75716C3.3209 8.68886 3.28272 8.59635 3.28272 8.4999C3.28272 8.40346 3.3209 8.31095 3.3889 8.24265L4.27785 7.35267V8.91887C4.27785 8.97097 4.29852 9.02094 4.33531 9.05778C4.37211 9.09462 4.42201 9.11532 4.47404 9.11532C4.52607 9.11532 4.57597 9.09462 4.61276 9.05778C4.64955 9.02094 4.67022 8.97097 4.67022 8.91887V5.14545C4.67032 5.04907 4.7086 4.95666 4.77667 4.88851C4.84473 4.82035 4.93702 4.78202 5.03327 4.78192H6.29025L5.26471 5.80882C5.22915 5.84591 5.20954 5.89547 5.21006 5.94688C5.21059 5.99828 5.23122 6.04743 5.26752 6.08378C5.30383 6.12013 5.35291 6.14078 5.40425 6.14131C5.45559 6.14183 5.50509 6.12219 5.54212 6.08658C5.54355 6.08505 6.90206 4.72494 6.90339 4.72353L8.12639 3.49892C8.19465 3.43091 8.28702 3.39274 8.3833 3.39274C8.47959 3.39274 8.57196 3.43091 8.64022 3.49892L9.52903 4.38904H7.97753C7.92596 4.38973 7.87673 4.41073 7.8405 4.4475C7.80428 4.48426 7.78397 4.53383 7.78397 4.58548C7.78397 4.63713 7.80428 4.6867 7.8405 4.72346C7.87673 4.76022 7.92596 4.78123 7.97753 4.78192H11.7333C11.8296 4.78202 11.9219 4.82036 11.99 4.88851C12.058 4.95666 12.0963 5.04907 12.0964 5.14545V6.40362L11.0716 5.37719C11.0346 5.34149 10.9851 5.32176 10.9337 5.32224C10.8823 5.32273 10.8331 5.34339 10.7968 5.37978C10.7604 5.41617 10.7398 5.46539 10.7393 5.51685C10.7389 5.56831 10.7586 5.61791 10.7942 5.65498L12.1244 6.98728C12.1416 7.01789 12.1669 7.04321 12.1975 7.06051L13.3777 8.24265C13.4457 8.31095 13.4839 8.40346 13.4839 8.4999C13.4839 8.59635 13.4457 8.68886 13.3777 8.75716Z" fill="#1C274C"/>
                                          <path d="M9.43726 9.29285L11.1563 9.16163C11.201 9.15726 11.2428 9.13777 11.2749 9.10638C11.307 9.075 11.3274 9.03359 11.3328 8.989C11.3382 8.94441 11.3283 8.89931 11.3046 8.86115C11.281 8.82298 11.245 8.79404 11.2027 8.77911C10.9981 8.69183 10.8225 8.54804 10.6965 8.36455C10.359 7.89793 9.65756 7.96636 9.62504 7.96953L9.62482 7.96956C9.57379 7.97585 9.52727 8.00196 9.49526 8.04225C9.46325 8.08254 9.44832 8.1338 9.45367 8.185C9.45901 8.23621 9.48422 8.28326 9.52386 8.31605C9.5635 8.34884 9.61441 8.36474 9.66564 8.36032C9.6708 8.35937 10.1743 8.31237 10.3789 8.59513C10.4349 8.6727 10.4972 8.74552 10.5651 8.81287L9.42232 8.90054C9.34566 8.90053 9.27214 8.87006 9.2179 8.81582C9.16366 8.76158 9.13313 8.68801 9.13303 8.61125V6.90429C9.13199 6.85508 9.11258 6.80804 9.07862 6.77246C9.04465 6.73688 8.9986 6.71534 8.94955 6.71209C8.9005 6.70884 8.85202 6.72412 8.81367 6.75491C8.77532 6.78569 8.74988 6.82976 8.74238 6.8784C8.70571 7.17156 8.63883 7.46013 8.54283 7.7395L7.89137 6.98794C7.85695 6.94976 7.80895 6.92663 7.75769 6.9235C7.70642 6.92038 7.65598 6.93751 7.61719 6.97123C7.5784 7.00494 7.55437 7.05255 7.55026 7.10381C7.54615 7.15507 7.56228 7.20591 7.59519 7.24539L8.37001 8.13927C8.04515 8.75384 7.6493 8.90052 7.62143 8.90995C7.57764 8.92496 7.54054 8.95495 7.51664 8.99464C7.49274 9.03434 7.48358 9.08119 7.49077 9.12698C7.49795 9.17276 7.52102 9.21455 7.55592 9.24499C7.59082 9.27543 7.63532 9.29258 7.6816 9.29343C7.7985 9.27386 8.28318 9.12956 8.74068 8.27576L8.74066 8.61126C8.74119 8.70197 8.75968 8.79167 8.79507 8.87517C8.83046 8.95866 8.88204 9.0343 8.94684 9.0977C9.01163 9.16109 9.08834 9.21098 9.17252 9.24448C9.2567 9.27798 9.34669 9.29442 9.43726 9.29285Z" fill="#5CD1FD"/>
                                          <path d="M7.07292 8.87158V6.9043C7.07292 6.8522 7.05225 6.80223 7.01546 6.76539C6.97867 6.72855 6.92877 6.70786 6.87674 6.70786C6.82471 6.70786 6.77481 6.72855 6.73802 6.76539C6.70123 6.80223 6.68056 6.8522 6.68056 6.9043V8.87158C6.67918 8.98642 6.63265 9.09609 6.55106 9.17681C6.46947 9.25753 6.35939 9.3028 6.2447 9.30279C6.13 9.30279 6.01992 9.25752 5.93834 9.1768C5.85675 9.09608 5.81022 8.98641 5.80885 8.87156V8.65058C5.80812 8.59897 5.78713 8.54971 5.75042 8.51346C5.71371 8.47722 5.66422 8.4569 5.61267 8.4569C5.56111 8.4569 5.51163 8.47722 5.47492 8.51346C5.4382 8.54971 5.41721 8.59897 5.41648 8.65058V8.87158C5.41648 9.09153 5.50374 9.30246 5.65906 9.45799C5.81439 9.61351 6.02505 9.70089 6.2447 9.70089C6.46436 9.70089 6.67502 9.61351 6.83034 9.45799C6.98566 9.30246 7.07292 9.09153 7.07292 8.87158Z" fill="#5CD1FD"/>
                                          <path d="M28.3462 11.2088C27.908 11.2292 27.4708 11.1877 27.0472 11.0875C27.0408 11.15 27.0323 11.2125 27.0219 11.2748L26.8532 12.2844C26.818 12.4944 27.0078 12.6728 27.2148 12.6242C28.1318 12.4098 28.9021 11.8308 29.3686 11.0468C29.0397 11.1373 28.6972 11.1927 28.3462 11.2088Z" fill="#5CD1FD"/>
                                          <path d="M25.7676 5.90193C25.8065 5.95579 25.8434 6.01088 25.8784 6.06697C26.2194 5.78652 26.5996 5.55423 27.0083 5.37876C27.3276 5.24151 27.6562 5.14224 27.9883 5.07945C27.222 4.57936 26.272 4.39993 25.3519 4.6151L25.3487 4.61585C25.1412 4.66424 25.0503 4.90845 25.175 5.08144L25.7676 5.90193Z" fill="#5CD1FD"/>
                                          <path d="M31.8109 9.432C31.0582 9.01803 30.194 8.78226 29.2744 8.78226C27.7667 8.78226 26.4068 9.41562 25.4454 10.4312L26.0519 10.73C26.7639 11.0812 27.5533 11.2457 28.3462 11.209C29.7292 11.1445 30.9824 10.4776 31.8109 9.432Z" fill="#EBECED"/>
                                          <path d="M24.5308 8.40928L24.766 8.70487C24.8755 8.84261 24.9169 9.02229 24.8788 9.19403L24.7952 9.56854C24.5092 10.8524 23.5119 11.8575 22.2315 12.1521C22.0243 12.1998 21.8351 12.0208 21.8708 11.8109L22.0431 10.8018C22.1809 9.99368 21.9901 9.164 21.5127 8.49788L20.9228 7.67491C20.7986 7.50167 20.8906 7.25771 21.0983 7.21006L21.1015 7.20932C22.3799 6.91571 23.7134 7.3823 24.5308 8.40928Z" fill="#5CD1FD"/>
                                          <path d="M30.558 7.30827C30.8993 7.30827 31.1759 7.03126 31.1759 6.68955C31.1759 6.34784 30.8993 6.07083 30.558 6.07083C30.2168 6.07083 29.9401 6.34784 29.9401 6.68955C29.9401 7.03126 30.2168 7.30827 30.558 7.30827Z" fill="#5CD1FD"/>
                                          <path d="M28.1298 11.3009C27.3982 11.3009 26.671 11.1321 26.0137 10.808L24.9482 10.2828C24.9053 10.2617 24.8874 10.2096 24.9088 10.1664C24.9298 10.1235 24.9819 10.1056 25.025 10.127L26.0905 10.6521C26.7877 10.9959 27.566 11.1582 28.3425 11.1222C29.2759 11.0788 30.1632 10.7579 30.9088 10.194C31.6543 9.63011 32.2055 8.86323 32.5027 7.97622L32.6722 7.46968C32.6864 7.42774 32.6685 7.38182 32.6301 7.36023L32.6046 7.34584C32.5446 7.31233 32.5015 7.25451 32.4861 7.1875C32.4707 7.12049 32.4844 7.04951 32.5238 6.99317L32.5404 6.96934C32.5656 6.93311 32.5614 6.88397 32.5307 6.85245L32.1572 6.47099C31.5034 5.80288 30.673 5.35367 29.7565 5.17225C28.8399 4.99083 27.9016 5.08986 27.0428 5.45866C26.3287 5.76541 25.6989 6.2521 25.2215 6.86585L24.5065 7.78512C24.477 7.82309 24.4225 7.82979 24.3848 7.80026C24.3471 7.77073 24.3402 7.71613 24.3697 7.6784L25.0847 6.75913C25.5802 6.12205 26.2335 5.61724 26.9746 5.29907C27.8656 4.91638 28.8392 4.81363 29.7902 5.00175C30.7412 5.18987 31.6027 5.65596 32.2811 6.34938L32.6546 6.73084C32.7439 6.82192 32.7557 6.96413 32.6826 7.06887L32.666 7.09269C32.6544 7.10932 32.6507 7.12917 32.6551 7.14878C32.6596 7.16839 32.6717 7.18452 32.6893 7.19445L32.7149 7.20884C32.8261 7.27113 32.8774 7.40416 32.8368 7.52503L32.6673 8.03157C32.3589 8.95208 31.7871 9.74775 31.0134 10.3327C30.2398 10.9177 29.3188 11.2507 28.3504 11.2959C28.2768 11.2991 28.2032 11.3009 28.1298 11.3009Z" fill="#2A3853"/>
                                          <path d="M31.5636 11.5702C31.5576 11.5702 31.5517 11.5697 31.5455 11.5682L30.9142 11.4344C30.8674 11.4245 30.8374 11.3784 30.8473 11.3314C30.8572 11.2845 30.9033 11.2545 30.9501 11.2644L31.5814 11.3982C31.6283 11.4081 31.6583 11.4543 31.6483 11.5012C31.6397 11.5422 31.6037 11.5702 31.5636 11.5702Z" fill="#F46E94"/>
                                          <path d="M29.9652 13.5408C29.9327 13.5408 29.9017 13.5227 29.8869 13.4914L29.608 12.9084C29.5875 12.8652 29.6056 12.8134 29.6489 12.7925C29.6921 12.7717 29.7439 12.79 29.7647 12.8335L30.0435 13.4164C30.0641 13.4596 30.046 13.5115 30.0026 13.5323C29.9905 13.538 29.9778 13.5408 29.9652 13.5408Z" fill="#F46E94"/>
                                          <path d="M23.8487 4.99235C23.8361 4.99235 23.8234 4.98962 23.8113 4.98391L23.2288 4.70545C23.1857 4.68485 23.1674 4.63298 23.1879 4.58955C23.2085 4.54636 23.2603 4.52775 23.3037 4.5486L23.8861 4.82706C23.9293 4.84766 23.9476 4.89953 23.927 4.94296C23.9122 4.97398 23.8809 4.99235 23.8487 4.99235Z" fill="#F46E94"/>
                                          <path d="M25.4155 3.80577C25.3755 3.80577 25.3396 3.77773 25.331 3.73703L25.197 3.1049C25.1871 3.058 25.2168 3.01184 25.2635 3.00191C25.3102 2.99198 25.3562 3.02176 25.3661 3.06867L25.5001 3.70079C25.5099 3.7477 25.4803 3.79386 25.4336 3.80379C25.4274 3.80528 25.4214 3.80577 25.4155 3.80577Z" fill="#F46E94"/>
                                          <path d="M28.3462 11.2088C27.908 11.2292 27.4708 11.1877 27.0472 11.0875C27.0408 11.15 27.0323 11.2125 27.0219 11.2748L26.8532 12.2844C26.818 12.4944 27.0078 12.6728 27.2148 12.6242C28.1318 12.4098 28.9021 11.8308 29.3686 11.0468C29.0397 11.1373 28.6972 11.1927 28.3462 11.2088Z" fill="#5CD1FD"/>
                                          <path d="M25.7676 5.90193C25.8065 5.95579 25.8434 6.01088 25.8784 6.06697C26.2194 5.78652 26.5996 5.55423 27.0083 5.37876C27.3276 5.24151 27.6562 5.14224 27.9883 5.07945C27.222 4.57936 26.272 4.39993 25.3519 4.6151L25.3487 4.61585C25.1412 4.66424 25.0503 4.90845 25.175 5.08144L25.7676 5.90193Z" fill="#5CD1FD"/>
                                          <path d="M31.8109 9.432C31.0582 9.01803 30.194 8.78226 29.2744 8.78226C27.7667 8.78226 26.4068 9.41562 25.4454 10.4312L26.0519 10.73C26.7639 11.0812 27.5533 11.2457 28.3462 11.209C29.7292 11.1445 30.9824 10.4776 31.8109 9.432Z" fill="#EBECED"/>
                                          <path d="M24.5308 8.40928L24.766 8.70487C24.8755 8.84261 24.9169 9.02229 24.8788 9.19403L24.7952 9.56854C24.5092 10.8524 23.5119 11.8575 22.2315 12.1521C22.0243 12.1998 21.8351 12.0208 21.8708 11.8109L22.0431 10.8018C22.1809 9.99368 21.9901 9.164 21.5127 8.49788L20.9228 7.67491C20.7986 7.50167 20.8906 7.25771 21.0983 7.21006L21.1015 7.20932C22.3799 6.91571 23.7134 7.3823 24.5308 8.40928Z" fill="#5CD1FD"/>
                                          <path d="M30.558 7.30827C30.8993 7.30827 31.1759 7.03126 31.1759 6.68955C31.1759 6.34784 30.8993 6.07083 30.558 6.07083C30.2168 6.07083 29.9401 6.34784 29.9401 6.68955C29.9401 7.03126 30.2168 7.30827 30.558 7.30827Z" fill="#5CD1FD"/>
                                          <path d="M28.1298 11.3009C27.3982 11.3009 26.671 11.1321 26.0137 10.808L24.9482 10.2828C24.9053 10.2617 24.8874 10.2096 24.9088 10.1664C24.9298 10.1235 24.9819 10.1056 25.025 10.127L26.0905 10.6521C26.7877 10.9959 27.566 11.1582 28.3425 11.1222C29.2759 11.0788 30.1632 10.7579 30.9088 10.194C31.6543 9.63011 32.2055 8.86323 32.5027 7.97622L32.6722 7.46968C32.6864 7.42774 32.6685 7.38182 32.6301 7.36023L32.6046 7.34584C32.5446 7.31233 32.5015 7.25451 32.4861 7.1875C32.4707 7.12049 32.4844 7.04951 32.5238 6.99317L32.5404 6.96934C32.5656 6.93311 32.5614 6.88397 32.5307 6.85245L32.1572 6.47099C31.5034 5.80288 30.673 5.35367 29.7565 5.17225C28.8399 4.99083 27.9016 5.08986 27.0428 5.45866C26.3287 5.76541 25.6989 6.2521 25.2215 6.86585L24.5065 7.78512C24.477 7.82309 24.4225 7.82979 24.3848 7.80026C24.3471 7.77073 24.3402 7.71613 24.3697 7.6784L25.0847 6.75913C25.5802 6.12205 26.2335 5.61724 26.9746 5.29907C27.8656 4.91638 28.8392 4.81363 29.7902 5.00175C30.7412 5.18987 31.6027 5.65596 32.2811 6.34938L32.6546 6.73084C32.7439 6.82192 32.7557 6.96413 32.6826 7.06887L32.666 7.09269C32.6544 7.10932 32.6507 7.12917 32.6551 7.14878C32.6596 7.16839 32.6717 7.18452 32.6893 7.19445L32.7149 7.20884C32.8261 7.27113 32.8774 7.40416 32.8368 7.52503L32.6673 8.03157C32.3589 8.95208 31.7871 9.74775 31.0134 10.3327C30.2398 10.9177 29.3188 11.2507 28.3504 11.2959C28.2768 11.2991 28.2032 11.3009 28.1298 11.3009Z" fill="#2A3853"/>
                                          <path d="M31.5636 11.5702C31.5576 11.5702 31.5517 11.5697 31.5455 11.5682L30.9142 11.4344C30.8674 11.4245 30.8374 11.3784 30.8473 11.3314C30.8572 11.2845 30.9033 11.2545 30.9501 11.2644L31.5814 11.3982C31.6283 11.4081 31.6583 11.4543 31.6483 11.5012C31.6397 11.5422 31.6037 11.5702 31.5636 11.5702Z" fill="#F46E94"/>
                                          <path d="M29.9652 13.5408C29.9327 13.5408 29.9017 13.5227 29.8869 13.4914L29.608 12.9084C29.5875 12.8652 29.6056 12.8134 29.6489 12.7925C29.6921 12.7717 29.7439 12.79 29.7647 12.8335L30.0435 13.4164C30.0641 13.4596 30.046 13.5115 30.0026 13.5323C29.9905 13.538 29.9778 13.5408 29.9652 13.5408Z" fill="#F46E94"/>
                                          <path d="M23.8487 4.99235C23.8361 4.99235 23.8234 4.98962 23.8113 4.98391L23.2288 4.70545C23.1857 4.68485 23.1674 4.63298 23.1879 4.58955C23.2085 4.54636 23.2603 4.52775 23.3037 4.5486L23.8861 4.82706C23.9293 4.84766 23.9476 4.89953 23.927 4.94296C23.9122 4.97398 23.8809 4.99235 23.8487 4.99235Z" fill="#F46E94"/>
                                          <path d="M25.4155 3.80577C25.3755 3.80577 25.3396 3.77773 25.331 3.73703L25.197 3.1049C25.1871 3.058 25.2168 3.01184 25.2635 3.00191C25.3102 2.99198 25.3562 3.02176 25.3661 3.06867L25.5001 3.70079C25.5099 3.7477 25.4803 3.79386 25.4336 3.80379C25.4274 3.80528 25.4214 3.80577 25.4155 3.80577Z" fill="#F46E94"/>
                                        </svg>
                                      </div>
                                    </td>
                                    <td>
                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#categoryOptions"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <g opacity="0.5">
                                          <path d="M8.028 11C8.028 11.5523 7.58088 12 7.02933 12C6.47778 12 6.03067 11.5523 6.03067 11C6.03067 10.4477 6.47778 10 7.02933 10C7.58088 10 8.028 10.4477 8.028 11Z" fill="#1C274C"/>
                                          <path d="M12.0227 11C12.0227 11.5523 11.5755 12 11.024 12C10.4725 12 10.0253 11.5523 10.0253 11C10.0253 10.4477 10.4725 10 11.024 10C11.5755 10 12.0227 10.4477 12.0227 11Z" fill="#1C274C"/>
                                          <path d="M16.0173 11C16.0173 11.5523 15.5702 12 15.0187 12C14.4671 12 14.02 11.5523 14.02 11C14.02 10.4477 14.4671 10 15.0187 10C15.5702 10 16.0173 10.4477 16.0173 11Z" fill="#1C274C"/>
                                          <ellipse opacity="0.5" cx="11.024" cy="11" rx="9.98667" ry="10" stroke="#1C274C"/>
                                        </g>
                                      </svg></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="modal fade" id="categoryOptions" tabindex="-1" role="dialog" aria-labelledby="categoryOptionsLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="categoryOptionsLabel">.Options.</h5>
                            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-4">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editCategory" class="pos-action-item">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="87" viewBox="0 0 96 87" fill="none">
                                    <path opacity="0.5" d="M0 10C0 5.28596 0 2.92893 1.46447 1.46447C2.92893 0 5.28595 0 10 0H86C90.714 0 93.0711 0 94.5355 1.46447C96 2.92893 96 5.28595 96 10V77C96 81.714 96 84.0711 94.5355 85.5355C93.0711 87 90.714 87 86 87H10C5.28596 87 2.92893 87 1.46447 85.5355C0 84.0711 0 81.714 0 77V10Z" fill="#F2F2F2"/>
                                    <path opacity="0.5" d="M0 10C0 5.28596 0 2.92893 1.46447 1.46447C2.92893 0 5.28595 0 10 0H86C90.714 0 93.0711 0 94.5355 1.46447C96 2.92893 96 5.28595 96 10V77C96 81.714 96 84.0711 94.5355 85.5355C93.0711 87 90.714 87 86 87H10C5.28596 87 2.92893 87 1.46447 85.5355C0 84.0711 0 81.714 0 77V10Z" fill="#F2F2F2"/>
                                    <path opacity="0.5" d="M0 10C0 5.28596 0 2.92893 1.46447 1.46447C2.92893 0 5.28595 0 10 0H86C90.714 0 93.0711 0 94.5355 1.46447C96 2.92893 96 5.28595 96 10V77C96 81.714 96 84.0711 94.5355 85.5355C93.0711 87 90.714 87 86 87H10C5.28596 87 2.92893 87 1.46447 85.5355C0 84.0711 0 81.714 0 77V10Z" fill="#F2F2F2"/>
                                    <g opacity="0.5">
                                      <path d="M35 44.25H60" stroke="#1C274C" stroke-linecap="round"/>
                                      <path d="M51.6087 14.4397L50.4501 15.5983L39.7985 26.2499C39.0771 26.9713 38.7164 27.3321 38.4061 27.7298C38.0402 28.199 37.7264 28.7066 37.4704 29.2438C37.2534 29.6991 37.0921 30.1831 36.7695 31.151L35.4023 35.2526L35.0681 36.2552C34.9093 36.7315 35.0333 37.2567 35.3883 37.6117C35.7433 37.9667 36.2685 38.0907 36.7448 37.9319L37.7474 37.5977L41.849 36.2305C42.8169 35.9079 43.3009 35.7466 43.7562 35.5296C44.2934 35.2736 44.801 34.9598 45.2702 34.5939C45.6679 34.2836 46.0287 33.9229 46.7501 33.2015L57.4017 22.5499L58.5603 21.3913C60.4799 19.4717 60.4799 16.3594 58.5603 14.4397C56.6406 12.5201 53.5283 12.5201 51.6087 14.4397Z" stroke="#1C274C"/>
                                      <path opacity="0.5" d="M50.4507 15.5986C50.4507 15.5986 50.5955 18.0606 52.7679 20.233C54.9402 22.4053 57.4023 22.5502 57.4023 22.5502M37.748 37.598L35.4028 35.2529" stroke="#1C274C"/>
                                    </g>
                                  </svg>
                                  <p>Edit Item</p>
                                </a>
                              </div>

                              <div class="col-md-4">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#moveCategory" class="pos-action-item">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="87" viewBox="0 0 96 87" fill="none">
                                    <path opacity="0.5" d="M0 10C0 5.28596 0 2.92893 1.46447 1.46447C2.92893 0 5.28595 0 10 0H86C90.714 0 93.0711 0 94.5355 1.46447C96 2.92893 96 5.28595 96 10V77C96 81.714 96 84.0711 94.5355 85.5355C93.0711 87 90.714 87 86 87H10C5.28596 87 2.92893 87 1.46447 85.5355C0 84.0711 0 81.714 0 77V10Z" fill="#F2F2F2"/>
                                    <g opacity="0.5">
                                      <path d="M32 37.0938C32 35.6334 32 34.9032 32.314 34.3594C32.5197 34.0031 32.8156 33.7072 33.1719 33.5015C33.7157 33.1875 34.4459 33.1875 35.9062 33.1875C37.3666 33.1875 38.0968 33.1875 38.6406 33.5015C38.9969 33.7072 39.2928 34.0031 39.4985 34.3594C39.8125 34.9032 39.8125 35.6334 39.8125 37.0938C39.8125 38.5541 39.8125 39.2843 39.4985 39.8281C39.2928 40.1844 38.9969 40.4803 38.6406 40.686C38.0968 41 37.3666 41 35.9062 41C34.4459 41 33.7157 41 33.1719 40.686C32.8156 40.4803 32.5197 40.1844 32.314 39.8281C32 39.2843 32 38.5541 32 37.0938Z" stroke="#1C274C" stroke-width="1.5"/>
                                      <path opacity="0.5" d="M43.7188 37.0938C43.7188 35.6334 43.7188 34.9032 44.0328 34.3594C44.2385 34.0031 44.5343 33.7072 44.8906 33.5015C45.4345 33.1875 46.1647 33.1875 47.625 33.1875C49.0853 33.1875 49.8155 33.1875 50.3594 33.5015C50.7157 33.7072 51.0115 34.0031 51.2172 34.3594C51.5312 34.9032 51.5312 35.6334 51.5312 37.0938C51.5312 38.5541 51.5312 39.2843 51.2172 39.8281C51.0115 40.1844 50.7157 40.4803 50.3594 40.686C49.8155 41 49.0853 41 47.625 41C46.1647 41 45.4345 41 44.8906 40.686C44.5343 40.4803 44.2385 40.1844 44.0328 39.8281C43.7188 39.2843 43.7188 38.5541 43.7188 37.0938Z" stroke="#1C274C" stroke-width="1.5"/>
                                      <path opacity="0.7" d="M55.4375 37.0938C55.4375 35.6334 55.4375 34.9032 55.7515 34.3594C55.9572 34.0031 56.2531 33.7072 56.6094 33.5015C57.1532 33.1875 57.8834 33.1875 59.3438 33.1875C60.8041 33.1875 61.5343 33.1875 62.0781 33.5015C62.4344 33.7072 62.7303 34.0031 62.936 34.3594C63.25 34.9032 63.25 35.6334 63.25 37.0938C63.25 38.5541 63.25 39.2843 62.936 39.8281C62.7303 40.1844 62.4344 40.4803 62.0781 40.686C61.5343 41 60.8041 41 59.3438 41C57.8834 41 57.1532 41 56.6094 40.686C56.2531 40.4803 55.9572 40.1844 55.7515 39.8281C55.4375 39.2843 55.4375 38.5541 55.4375 37.0938Z" stroke="#1C274C" stroke-width="1.5"/>
                                      <path d="M35.9062 33.1875V23.8125C35.9062 20.1297 35.9062 18.2882 37.0504 17.1441C38.1945 16 40.0359 16 43.7188 16H51.5312C55.2141 16 57.0555 16 58.1996 17.1441C59.3438 18.2882 59.3438 20.1297 59.3438 23.8125V28.5M59.3438 28.5L62.4688 25.375M59.3438 28.5L56.2188 25.375" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                  </svg>
                                  <p>Move Item</p>
                                </a>
                              </div>

                              <div class="col-md-4">
                                <a href="javascript:void(0)" class="pos-action-item" data-bs-toggle="modal" data-bs-target="#removeCategory">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="87" viewBox="0 0 96 87" fill="none">
                                    <path opacity="0.5" d="M0 10C0 5.28596 0 2.92893 1.46447 1.46447C2.92893 0 5.28595 0 10 0H86C90.714 0 93.0711 0 94.5355 1.46447C96 2.92893 96 5.28595 96 10V77C96 81.714 96 84.0711 94.5355 85.5355C93.0711 87 90.714 87 86 87H10C5.28596 87 2.92893 87 1.46447 85.5355C0 84.0711 0 81.714 0 77V10Z" fill="#F2F2F2"/>
                                    <path opacity="0.5" d="M54.2514 18.5002C56.9704 18.5153 58.4429 18.6359 59.4035 19.5965C60.502 20.6949 60.502 22.4629 60.502 25.9987V33.4993C60.502 37.0352 60.502 38.8031 59.4035 39.9016C58.3051 41 56.5371 41 53.0013 41H45.5007C41.9648 41 40.1969 41 39.0984 39.9016C38 38.8031 38 37.0352 38 33.4993V25.9987C38 22.4629 38 20.6949 39.0984 19.5965C40.059 18.6359 41.5315 18.5153 44.2505 18.5002" stroke="#1C274C" stroke-width="1.5"/>
                                    <path d="M44.2506 17.8752C44.2506 16.8395 45.0901 16 46.1257 16H52.3763C53.4119 16 54.2514 16.8395 54.2514 17.8752V19.1253C54.2514 20.1609 53.4119 21.0004 52.3763 21.0004H46.1257C45.0901 21.0004 44.2506 20.1609 44.2506 19.1253V17.8752Z" stroke="#1C274C" stroke-width="1.5"/>
                                    <path d="M52.3763 27.251L46.1258 33.5015M46.1258 27.251L52.3763 33.5015" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                                  </svg>
                                  <p>Remove Item</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="modal fade" id="moveCategory" tabindex="-1" role="dialog" aria-labelledby="moveCategoryLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="moveCategoryLabel">.Options.</h5>
                            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </div>
                          <div class="modal-body">
                            <div class="move-textbox">
                              <label for="current_category">Current Category</label>
                              <input type="text" class="form-control" id="current_category">
                            </div>
                            <p class="text-center mt-2">. Move to .</p>
                            <div class="move-textbox">
                              <label for="select_category">Select the Category</label>
                              <input type="text" class="form-control" id="select_category">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn add-food-extra">
                              Save and Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="modal fade" id="removeCategory" tabindex="-1" role="dialog" aria-labelledby="removeCategoryLabel" aria-hidden="true">
                      <div class="modal-dialog mt-5" role="document">
                        <div class="modal-content">
                          <div class="removeAlert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="52" viewBox="0 0 47 52" fill="none">
                              <path d="M1 22.0416C1 14.0477 1 10.0507 1.94379 8.70602C2.88758 7.36135 6.64581 6.07489 14.1623 3.50198L15.5943 3.01179C19.5125 1.6706 21.4715 1 23.5 1C25.5285 1 27.4875 1.6706 31.4057 3.01179L32.8377 3.50198C40.3542 6.07489 44.1124 7.36135 45.0562 8.70602C46 10.0507 46 14.0477 46 22.0416C46 23.2491 46 24.5585 46 25.9784C46 40.0736 35.4026 46.9137 28.7536 49.8182C26.95 50.6061 26.0481 51 23.5 51C20.9519 51 20.05 50.6061 18.2464 49.8182C11.5974 46.9137 1 40.0736 1 25.9784C1 24.5585 1 23.2491 1 22.0416Z" stroke="#ED1C24" stroke-width="2"/>
                              <path d="M23.5 16V26" stroke="#1C274C" stroke-width="2" stroke-linecap="round"/>
                              <ellipse cx="23.5" cy="33.5" rx="2.5" ry="2.5" fill="#1C274C"/>
                            </svg>
                          </div>
                          <div class="modal-header">
                            <h5 class="modal-title" id="removeCategoryLabel">.Options.</h5>
                            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </div>
                          <div class="modal-body">
                            <h4 class="text-center"><span class="text-danger">!!</span> Alert <span class="text-danger">!!</span></h4>
                            <p class="text-center">Your about to delete the item “ TITLE OF
                              Item” are you sure to remove this Ads</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-radius btn-danger">
                              No
                            </button>
                            <button type="button" class="btn btn-radius btn-primary">
                              Yes
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
                      <div class="modal-dialog mt-5" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="createCategoryLabel">Create a New Category</h5>
                            <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </a>
                          </div>
                          <div class="modal-body">
                            <div class="move-textbox">
                              <label for="category_name">Category Name</label>
                              <input type="text" class="form-control" id="category_name">
                            </div>
                            <hr>
                            <h4 class="text-center">
                              . Add Image .
                            </h4>
                            <div class="double-toggle-switch">
                              <a href="javascript:void(0)" class="btn image-switch active" data-value="upload">Upload image</a>
                              <a href="javascript:void(0)" class="btn image-switch" data-value="select">Select Image</a>
                            </div>

                            <label class="upload-image" for="drop-file">
                              <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 30 25" fill="none">
                                  <g opacity="0.5">
                                    <path d="M12.3634 12.5667C14.6872 12.5667 16.5706 10.5992 16.5706 8.17183C16.5706 5.74447 14.6872 3.77692 12.3634 3.77692C10.0399 3.77692 8.15637 5.74453 8.15637 8.1719C8.15904 10.5979 10.0411 12.564 12.3635 12.5668L12.3634 12.5667ZM12.3634 5.07477C14.0006 5.07477 15.3277 6.46117 15.3277 8.17138C15.3277 9.88159 14.0006 11.2679 12.3634 11.2679C10.7262 11.2679 9.39927 9.88152 9.39927 8.17131C9.40119 6.46194 10.7271 5.07684 12.3634 5.07477Z" fill="#1C274C"/>
                                    <path d="M26.5954 0.140991H3.85235C2.13703 0.143069 0.747044 1.5951 0.745117 3.38691V20.9149C0.747044 22.7068 2.13703 24.1589 3.85235 24.1608H26.5954C28.3106 24.1589 29.7007 22.7068 29.7026 20.9149V3.38691C29.7007 1.5951 28.3106 0.143069 26.5954 0.140991ZM3.85235 1.43936H26.5954C27.6244 1.44066 28.4585 2.31174 28.4597 3.38691V16.1858L24.7415 10.6824C24.4572 10.2617 24.0812 9.91777 23.6446 9.67887C23.2079 9.43997 22.7231 9.31301 22.2302 9.30845C21.7373 9.30388 21.2504 9.42191 20.8097 9.65279C20.3691 9.88367 19.9874 10.2208 19.6961 10.6362L15.464 16.6724C14.8748 17.5161 13.7525 17.7225 12.9231 17.1398L9.75902 14.928C9.25081 14.5718 8.65309 14.3806 8.04108 14.3785C7.42908 14.3763 6.83015 14.5634 6.31968 14.916L1.9882 17.9294V3.38691C1.98944 2.31199 2.8233 1.44066 3.85235 1.43936ZM26.5954 22.8625H3.85235C2.82305 22.8612 1.98925 21.9899 1.98801 20.9149V19.4897L7.0057 15.9991C7.31182 15.7879 7.67087 15.676 8.0377 15.6774C8.40453 15.6788 8.76278 15.7935 9.06741 16.007L12.2314 18.219C13.6142 19.1903 15.4846 18.8459 16.4663 17.4395L20.6984 11.4034C20.8731 11.154 21.1021 10.9517 21.3665 10.8132C21.6309 10.6746 21.923 10.6038 22.2188 10.6066C22.5145 10.6093 22.8054 10.6855 23.0674 10.8289C23.3294 10.9722 23.555 11.1786 23.7255 11.431L28.4592 18.4374V20.9149C28.458 21.9899 27.6241 22.861 26.5954 22.8625Z" fill="#1C274C"/>
                                  </g>
                                </svg>
                              </center>
                              <h4 class="m-0">Banner Size will be here</h4>
                            </label>
                            <input type="file" name="" style="display: none" id="drop-file">

                            <div class="select-image" style="display: none">
                              <div class="radio-collection">
                                <span>
                                <input type='radio' name='fulfillment' value='delivery' id='pizza' checked>
                              <label for='pizza'>Pizza</label>
                                </span>

                                <span>
                              <input type='radio' name='fulfillment' value='pickup' id='burger'>
                              <label for='burger'>Burger</label>
                                </span>

                                  <span>
                              <input type='radio' name='fulfillment' value='pickup' id='salad'>
                              <label for='salad'>Salad</label>
                                </span>

                              </div>
                              <div class="pos-menu-list">
                                <div class="pos-menu-item p-5">
                                </div>
                                <div class="pos-menu-item p-5">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-radius btn-danger">
                              No
                            </button>
                            <button type="button" class="btn btn-radius btn-primary">
                              Yes
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="modal fade bd-example-modal-lg" id="addItem" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="createCategoryLabel">Add new Item</h5>
                          <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                              <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </a>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-8 itemPriceType">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="move-textbox">
                                    <label for="item_number">Item Number</label>
                                    <input type="text" class="form-control" id="item_number" placeholder="Item Number">
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="move-textbox">
                                    <label for="item_title">Item Title</label>
                                    <input type="text" class="form-control" id="item_title" placeholder="Item Title">
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <h4 class="text-center">
                                . Price Type .
                              </h4>
                              <div class="double-toggle-switch mb-5" style="width: 252px">
                                <a href="javascript:void(0)" class="btn image-switch active" data-value="">Single Price</a>
                                <a href="javascript:void(0)" class="btn image-switch" data-value="">Multi Price</a>
                              </div>

                              <hr>

                              <h4 class="text-center">
                                . Add Image .
                              </h4>
                              <div class="double-toggle-switch mb-5">
                                <a href="javascript:void(0)" class="btn image-switch active" data-value="">Upload Image</a>
                                <a href="javascript:void(0)" class="btn image-switch" data-value="">Select Image</a>
                              </div>

                            </div>
                            <div class="col-md-4 item-type-section">
                              <h4>
                                . Select Food Type .
                              </h4>

                              <div class="d-flex justify-center">
                                <a href="javascript:void(0)" class="foodType">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="39" height="35" viewBox="0 0 39 35" fill="none">
                                    <path d="M24.3411 26.7154C22.9151 26.7816 21.4922 26.6467 20.1138 26.3204C20.0928 26.524 20.0654 26.7275 20.0315 26.9302L19.4822 30.2158C19.3677 30.8991 19.9855 31.4799 20.659 31.3215C23.6434 30.6237 26.1503 28.7394 27.6683 26.188C26.598 26.4828 25.4832 26.6629 24.3411 26.7154Z" fill="#5CD1FD"/>
                                    <path d="M15.9492 9.44432C16.0758 9.61958 16.196 9.79888 16.3097 9.98142C17.4196 9.06875 18.6569 8.31277 19.987 7.74174C21.0259 7.2951 22.0954 6.97203 23.1763 6.76769C20.6823 5.14023 17.5906 4.55629 14.5965 5.25654L14.586 5.25896C13.9109 5.41646 13.6149 6.21121 14.0206 6.77415L15.9492 9.44432Z" fill="#5CD1FD"/>
                                    <path d="M35.6164 20.9328C33.1668 19.5856 30.3542 18.8184 27.3617 18.8184C22.4552 18.8184 18.0294 20.8795 14.9006 24.1845L16.8744 25.157C19.1917 26.2998 21.7607 26.8353 24.341 26.7158C28.8418 26.5058 32.92 24.3356 35.6164 20.9328Z" fill="#EBECED"/>
                                    <path d="M11.9244 17.603L12.6898 18.5649C13.0463 19.0132 13.181 19.5979 13.0568 20.1568L12.785 21.3756C11.8542 25.5537 8.60846 28.8248 4.44159 29.7835C3.76728 29.9386 3.15185 29.3562 3.268 28.6729L3.82858 25.3889C4.27705 22.7592 3.65597 20.0591 2.10247 17.8913L0.182773 15.2131C-0.221331 14.6493 0.0779156 13.8554 0.753842 13.7003L0.764327 13.6979C4.92474 12.7424 9.26422 14.2608 11.9244 17.603Z" fill="#5CD1FD"/>
                                    <path d="M31.5393 14.0202C32.6498 14.0202 33.5501 13.1187 33.5501 12.0067C33.5501 10.8946 32.6498 9.99316 31.5393 9.99316C30.4287 9.99316 29.5284 10.8946 29.5284 12.0067C29.5284 13.1187 30.4287 14.0202 31.5393 14.0202Z" fill="#5CD1FD"/>
                                    <path d="M23.637 27.0147C21.2559 27.0147 18.8894 26.4655 16.7503 25.4107L13.2828 23.7017C13.1432 23.633 13.0852 23.4634 13.1545 23.3229C13.2231 23.1831 13.3925 23.125 13.5328 23.1944L17.0004 24.9035C19.2693 26.0221 21.802 26.5503 24.3291 26.4332C27.3667 26.2919 30.2543 25.2475 32.6805 23.4125C35.1068 21.5775 36.9006 19.0818 37.8678 16.1952L38.4195 14.5467C38.4654 14.4102 38.4074 14.2608 38.2823 14.1905L38.1993 14.1437C38.0041 14.0346 37.8637 13.8465 37.8137 13.6284C37.7637 13.4103 37.8081 13.1793 37.9363 12.996L37.9904 12.9184C38.0726 12.8005 38.0589 12.6406 37.9589 12.538L36.7434 11.2966C34.6156 9.12238 31.9135 7.6605 28.9307 7.07009C25.9479 6.47968 22.8941 6.80194 20.0993 8.00214C17.7755 9.00042 15.7259 10.5843 14.1724 12.5816L11.8454 15.5733C11.7494 15.6968 11.572 15.7186 11.4494 15.6225C11.3268 15.5264 11.3042 15.3487 11.4002 15.226L13.7272 12.2343C15.3396 10.161 17.4658 8.51824 19.8775 7.48281C22.7772 6.23738 25.9455 5.90301 29.0404 6.51522C32.1353 7.12743 34.939 8.64424 37.1467 10.9009L38.3622 12.1423C38.6526 12.4387 38.6913 12.9015 38.4533 13.2423L38.3993 13.3198C38.3614 13.374 38.3493 13.4386 38.3638 13.5024C38.3783 13.5662 38.4178 13.6187 38.4751 13.651L38.5582 13.6978C38.9204 13.9006 39.0873 14.3335 38.955 14.7268L38.4033 16.3753C37.3999 19.3709 35.5391 21.9603 33.0209 23.864C30.5035 25.7677 27.5062 26.8516 24.3549 26.9986C24.1153 27.0091 23.8758 27.0147 23.637 27.0147Z" fill="#2A3853"/>
                                    <path d="M34.8115 27.89C34.7921 27.89 34.7728 27.8884 34.7526 27.8836L32.6982 27.4482C32.5457 27.4159 32.4481 27.2657 32.4804 27.113C32.5127 26.9604 32.6627 26.8627 32.8151 26.895L34.8695 27.3303C35.022 27.3626 35.1196 27.5128 35.0873 27.6655C35.0591 27.7987 34.9421 27.89 34.8115 27.89Z" fill="#F46E94"/>
                                    <path d="M29.6098 34.3031C29.5041 34.3031 29.4033 34.2441 29.3549 34.1424L28.4475 32.2451C28.3805 32.1046 28.4394 31.9358 28.5805 31.868C28.7209 31.8001 28.8895 31.8599 28.9572 32.0012L29.8646 33.8984C29.9316 34.039 29.8727 34.2078 29.7316 34.2756C29.692 34.2942 29.6509 34.3031 29.6098 34.3031Z" fill="#F46E94"/>
                                    <path d="M9.70461 6.48454C9.66347 6.48454 9.62233 6.47565 9.58281 6.45708L7.68731 5.55087C7.54697 5.48383 7.48728 5.31503 7.55423 5.17369C7.62117 5.03315 7.78975 4.97258 7.9309 5.04042L9.8264 5.94663C9.96675 6.01367 10.0264 6.18247 9.95949 6.32381C9.91109 6.42477 9.80946 6.48454 9.70461 6.48454Z" fill="#F46E94"/>
                                    <path d="M14.8037 2.62226C14.6734 2.62226 14.5567 2.53099 14.5286 2.39853L14.0926 0.341393C14.0604 0.188743 14.1569 0.0385162 14.309 0.00620934C14.461 -0.0260975 14.6106 0.070823 14.6428 0.223473L15.0788 2.28061C15.111 2.43326 15.0145 2.58349 14.8624 2.6158C14.8423 2.62064 14.823 2.62226 14.8037 2.62226Z" fill="#F46E94"/>
                                  </svg>
                                </a>

                                <a href="javascript:void(0)" class="foodType">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                    <path opacity="0.5" d="M34.2964 15.7973L30.5803 12.0802V6.82644C30.5795 6.18836 30.3257 5.57663 29.8745 5.12543C29.4233 4.67424 28.8115 4.42043 28.1735 4.41967H22.9179L19.2024 0.703626C18.7504 0.253028 18.1382 0 17.5 0C16.8618 0 16.2496 0.253028 15.7976 0.703626L12.0815 4.41967H6.82656C6.18847 4.42043 5.57672 4.67424 5.12552 5.12543C4.67432 5.57663 4.42051 6.18836 4.41975 6.82644V12.0819L0.703638 15.7973C0.253032 16.2493 0 16.8615 0 17.4997C0 18.1379 0.253032 18.7501 0.703638 19.2021L4.41975 22.9168V28.173C4.42051 28.8111 4.67432 29.4228 5.12552 29.874C5.57672 30.3252 6.18847 30.579 6.82656 30.5797H12.0844L15.7976 34.2958C16.2495 34.7465 16.8617 34.9996 17.5 34.9996C18.1383 34.9996 18.7505 34.7465 19.2024 34.2958L22.9223 30.5797H28.1735C28.8115 30.579 29.4233 30.3252 29.8745 29.874C30.3257 29.4228 30.5795 28.8111 30.5803 28.173V22.9175L34.2964 19.202C34.747 18.7501 35 18.1379 35 17.4997C35 16.8615 34.747 16.2493 34.2964 15.7973ZM33.4125 18.3182L30.5803 21.15V15.9841C30.578 15.8198 30.5112 15.6629 30.3942 15.5475C30.2773 15.4321 30.1195 15.3674 29.9552 15.3674C29.7909 15.3674 29.6331 15.4321 29.5162 15.5475C29.3992 15.6629 29.3324 15.8198 29.3302 15.9841V28.173C29.3298 28.4796 29.2079 28.7736 28.991 28.9905C28.7741 29.2073 28.4801 29.3293 28.1734 29.3296H24.1736L27.7236 25.7833C27.8371 25.6653 27.8998 25.5075 27.8983 25.3438C27.8967 25.1801 27.831 25.0236 27.7152 24.9078C27.5994 24.792 27.4429 24.7263 27.2792 24.7248C27.1154 24.7232 26.9577 24.7859 26.8397 24.8995C26.8085 24.9173 22.2338 29.5102 22.2071 29.5273L18.3186 33.4119C18.1011 33.6283 17.8068 33.7498 17.5 33.7498C17.1932 33.7498 16.8989 33.6283 16.6815 33.4119L13.8514 30.5797H18.8435C19.0078 30.5775 19.1647 30.5107 19.2801 30.3937C19.3955 30.2767 19.4602 30.119 19.4602 29.9547C19.4602 29.7904 19.3955 29.6326 19.2801 29.5156C19.1647 29.3987 19.0078 29.3319 18.8435 29.3296H6.82656C6.51988 29.3293 6.22586 29.2073 6.009 28.9905C5.79215 28.7736 5.67018 28.4796 5.66985 28.173V24.1664L9.21935 27.7146C9.33731 27.8281 9.4951 27.8908 9.65882 27.8892C9.82253 27.8877 9.97909 27.8219 10.0949 27.7062C10.2106 27.5904 10.2763 27.4338 10.2779 27.2701C10.2794 27.1064 10.2167 26.9486 10.1032 26.8307L1.5875 18.3182C1.37085 18.1009 1.24919 17.8066 1.24919 17.4997C1.24919 17.1928 1.37085 16.8985 1.5875 16.6812L4.41976 13.8494V18.8328C4.41976 18.9986 4.48561 19.1575 4.60283 19.2748C4.72005 19.392 4.87903 19.4578 5.04481 19.4578C5.21058 19.4578 5.36956 19.392 5.48678 19.2748C5.604 19.1575 5.66985 18.9986 5.66985 18.8328V6.82643C5.67018 6.51975 5.79215 6.22573 6.00901 6.00888C6.22586 5.79203 6.51989 5.67006 6.82656 5.66974H10.8314L7.56393 8.93715C7.45066 9.05516 7.38816 9.21286 7.38983 9.37642C7.39151 9.53998 7.45724 9.69637 7.5729 9.81203C7.68857 9.92769 7.84497 9.9934 8.00853 9.99507C8.1721 9.99674 8.3298 9.93423 8.4478 9.82095C8.45235 9.81606 12.7806 5.48843 12.7849 5.48395L16.6814 1.58746C16.8989 1.37108 17.1932 1.24961 17.5 1.24961C17.8068 1.24961 18.1011 1.37108 18.3185 1.58746L21.1503 4.41967H16.2072C16.0429 4.42187 15.886 4.48869 15.7706 4.60567C15.6552 4.72265 15.5905 4.88037 15.5905 5.0447C15.5905 5.20904 15.6552 5.36676 15.7706 5.48374C15.886 5.60072 16.0429 5.66754 16.2072 5.66974H28.1735C28.4801 5.67007 28.7742 5.79204 28.991 6.00889C29.2079 6.22574 29.3298 6.51976 29.3302 6.82643V10.8297L26.0651 7.56378C25.9472 7.45019 25.7894 7.38741 25.6256 7.38895C25.4619 7.39049 25.3053 7.45623 25.1895 7.57202C25.0737 7.68781 25.008 7.84442 25.0065 8.00816C25.0049 8.17191 25.0677 8.32971 25.1813 8.44765L29.4193 12.6868C29.4743 12.7842 29.5548 12.8648 29.6522 12.9198L33.4125 16.6812C33.6292 16.8985 33.7508 17.1928 33.7508 17.4997C33.7508 17.8066 33.6292 18.1009 33.4125 18.3182Z" fill="#1C274C"/>
                                    <path d="M20.858 20.0228L26.3351 19.6053C26.4773 19.5914 26.6106 19.5294 26.7128 19.4295C26.815 19.3297 26.8801 19.1979 26.8974 19.056C26.9146 18.9142 26.8829 18.7707 26.8075 18.6492C26.7321 18.5278 26.6176 18.4357 26.4828 18.3882C25.8309 18.1105 25.2716 17.653 24.8701 17.0691C23.7946 15.5844 21.5599 15.8022 21.4562 15.8123L21.4556 15.8124C21.293 15.8324 21.1447 15.9154 21.0428 16.0436C20.9408 16.1718 20.8932 16.3349 20.9102 16.4979C20.9273 16.6608 21.0076 16.8105 21.1339 16.9148C21.2602 17.0192 21.4224 17.0697 21.5856 17.0557C21.6021 17.0527 23.2062 16.9031 23.8581 17.8028C24.0365 18.0496 24.235 18.2813 24.4514 18.4956L20.8104 18.7746C20.5661 18.7745 20.3319 18.6776 20.1591 18.505C19.9863 18.3324 19.889 18.0983 19.8887 17.8541V12.4229C19.8854 12.2663 19.8235 12.1166 19.7153 12.0034C19.6071 11.8902 19.4604 11.8217 19.3041 11.8113C19.1478 11.801 18.9934 11.8496 18.8712 11.9476C18.749 12.0455 18.6679 12.1857 18.6441 12.3405C18.5272 13.2733 18.3141 14.1915 18.0082 15.0804L15.9327 12.689C15.823 12.5676 15.6701 12.4939 15.5067 12.484C15.3434 12.4741 15.1827 12.5286 15.0591 12.6359C14.9355 12.7431 14.859 12.8946 14.8459 13.0577C14.8328 13.2208 14.8842 13.3826 14.989 13.5082L17.4576 16.3524C16.4226 18.3078 15.1614 18.7745 15.0726 18.8045C14.9331 18.8523 14.8149 18.9477 14.7388 19.074C14.6626 19.2003 14.6334 19.3494 14.6563 19.4951C14.6792 19.6407 14.7527 19.7737 14.8639 19.8705C14.9751 19.9674 15.1169 20.022 15.2643 20.0247C15.6368 19.9624 17.181 19.5033 18.6386 16.7866L18.6386 17.8541C18.6402 18.1427 18.6992 18.4282 18.8119 18.6938C18.9247 18.9595 19.089 19.2002 19.2954 19.4019C19.5019 19.6036 19.7463 19.7624 20.0145 19.8689C20.2827 19.9755 20.5694 20.0278 20.858 20.0228Z" fill="#5CD1FD"/>
                                    <path d="M13.325 18.6824V12.4229C13.325 12.2571 13.2592 12.0981 13.142 11.9809C13.0247 11.8637 12.8658 11.7979 12.7 11.7979C12.5342 11.7979 12.3752 11.8637 12.258 11.9809C12.1408 12.0981 12.0749 12.2571 12.0749 12.4229V18.6824C12.0705 19.0478 11.9223 19.3968 11.6623 19.6536C11.4024 19.9105 11.0517 20.0545 10.6863 20.0545C10.3208 20.0545 9.97011 19.9104 9.71017 19.6536C9.45022 19.3967 9.30199 19.0478 9.29761 18.6824V17.9793C9.29529 17.815 9.22842 17.6583 9.11145 17.543C8.99448 17.4276 8.83682 17.363 8.67257 17.363C8.50831 17.363 8.35065 17.4276 8.23368 17.543C8.11671 17.6583 8.04984 17.815 8.04752 17.9793V18.6824C8.04752 19.3823 8.32553 20.0534 8.82039 20.5483C9.31525 21.0431 9.98643 21.3211 10.6863 21.3211C11.3861 21.3211 12.0573 21.0431 12.5522 20.5483C13.047 20.0534 13.325 19.3823 13.325 18.6824Z" fill="#5CD1FD"/>
                                  </svg>
                                </a>

                                <a href="javascript:void(0)" class="foodType">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="36" viewBox="0 0 29 36" fill="none">
                                    <path d="M24.0777 15.6028C23.6984 11.9652 21.3265 8.97751 18.1154 7.6748V7.67916C18.1154 8.32761 18.46 8.92239 19.0119 9.26257C19.878 9.7957 20.6476 10.4804 21.2823 11.2899C22.2818 12.5643 22.899 14.0926 23.0673 15.7087L24.1234 25.8315C24.1836 26.4089 24.6703 26.847 25.2506 26.847L24.0777 15.6028Z" fill="#EBECED"/>
                                    <path d="M4.94326 15.6028C5.32261 11.9652 7.69447 8.97751 10.9056 7.6748V7.67916C10.9056 8.32761 10.561 8.92239 10.009 9.26257C9.14298 9.7957 8.37339 10.4804 7.73872 11.2899C6.7392 12.5643 6.12194 14.0926 5.95366 15.7087L4.89756 25.8315C4.83736 26.4089 4.35066 26.847 3.77039 26.847L4.94326 15.6028Z" fill="#EBECED"/>
                                    <path d="M16.3732 24.7725C16.2999 24.8784 16.2288 24.9857 16.1621 25.096L14.9312 27.1088C14.7332 27.4323 14.2631 27.4323 14.0651 27.1088L12.8342 25.096C12.7668 24.9857 12.6957 24.8784 12.6232 24.7725L11.4554 27.5026C10.5211 29.6866 12.1234 32.1143 14.4989 32.1143C16.8744 32.1143 18.4766 29.6866 17.5424 27.5026L16.3732 24.7725Z" fill="#5CD1FD"/>
                                    <path d="M14.1043 0.224069L13.239 1.28524C11.9333 2.88607 11.5322 5.04178 12.1763 7.00527C12.6304 8.38994 12.9176 9.82394 13.0301 11.2768L13.1302 12.565C13.1599 12.9429 13.4747 13.2338 13.8533 13.2338H14.4974H15.1408C15.5194 13.2338 15.8342 12.9422 15.864 12.565L15.9641 11.2768C16.0772 9.82394 16.3637 8.38994 16.8178 7.00527C17.4619 5.0425 17.0615 2.88607 15.7552 1.28524L14.8898 0.224069C14.6875 -0.0247223 14.3074 -0.0247223 14.1043 0.224069Z" fill="#5CD1FD"/>
                                    <path d="M8.56704 16.3744C9.24565 16.3744 9.79577 15.8243 9.79577 15.1457C9.79577 14.4671 9.24565 13.917 8.56704 13.917C7.88844 13.917 7.33832 14.4671 7.33832 15.1457C7.33832 15.8243 7.88844 16.3744 8.56704 16.3744Z" fill="#5CD1FD"/>
                                    <path d="M20.4278 16.3744C21.1064 16.3744 21.6565 15.8243 21.6565 15.1457C21.6565 14.4671 21.1064 13.917 20.4278 13.917C19.7492 13.917 19.1991 14.4671 19.1991 15.1457C19.1991 15.8243 19.7492 16.3744 20.4278 16.3744Z" fill="#5CD1FD"/>
                                    <path d="M7.91568 21.5026C7.99692 21.8559 8.26457 22.1344 8.61418 22.2294C10.289 22.6828 11.7107 23.7483 12.6159 25.2287L13.8468 27.2415C13.986 27.4693 14.229 27.6056 14.4967 27.6056C14.7643 27.6056 15.0066 27.4693 15.1466 27.2415L16.3775 25.2287C17.2834 23.7483 18.7044 22.6835 20.3792 22.2294C20.7288 22.1344 20.9965 21.8566 21.0777 21.5026C21.1589 21.1494 21.0385 20.7824 20.7651 20.5445L15.6609 16.1155C14.9972 15.5396 13.9955 15.5396 13.3311 16.1155L8.22685 20.5445C7.95485 20.7824 7.83517 21.1494 7.91568 21.5026ZM8.56123 20.9282L13.6654 16.4992C14.1398 16.088 14.855 16.088 15.3294 16.4992L20.4336 20.9282C20.5671 21.0442 20.6236 21.2168 20.5845 21.3895C20.5446 21.5621 20.4191 21.6927 20.2479 21.7391C18.4469 22.2265 16.9193 23.3718 15.9459 24.9632L14.715 26.976C14.6483 27.0856 14.5409 27.0972 14.4981 27.0972C14.4553 27.0972 14.3487 27.0856 14.2813 26.976L13.0504 24.9632C12.077 23.3718 10.5487 22.2265 8.74837 21.7391C8.57719 21.6927 8.45171 21.5621 8.41181 21.3895C8.37119 21.2168 8.42777 21.0442 8.56123 20.9282Z" fill="#2A3853"/>
                                    <path d="M12.79 21.1219C12.93 21.1219 13.0438 21.008 13.0438 20.868V19.9062C13.0438 19.7662 12.93 19.6523 12.79 19.6523C12.65 19.6523 12.5361 19.7662 12.5361 19.9062V20.868C12.5361 21.008 12.65 21.1219 12.79 21.1219Z" fill="#2A3853"/>
                                    <path d="M16.2049 21.1219C16.3449 21.1219 16.4588 21.008 16.4588 20.868V19.9062C16.4588 19.7662 16.3449 19.6523 16.2049 19.6523C16.0649 19.6523 15.951 19.7662 15.951 19.9062V20.868C15.951 21.008 16.0642 21.1219 16.2049 21.1219Z" fill="#2A3853"/>
                                    <path d="M26.0847 32.3936L24.3301 15.5759C24.1365 13.7219 23.4278 11.9688 22.2811 10.5058C21.1582 9.07393 19.6662 7.98012 17.9675 7.34255C17.8362 7.29323 17.6897 7.35996 17.6403 7.49124C17.591 7.62253 17.6577 7.76905 17.789 7.81837C19.4007 8.42258 20.8166 9.46054 21.8814 10.8191C22.9694 12.2067 23.6418 13.8699 23.8246 15.6288L25.5792 32.4466C25.5886 32.5401 25.5465 32.6308 25.4682 32.6837L23.3089 34.1373C22.5327 34.6596 21.5303 34.6588 20.7549 34.1359L19.8251 33.5085C18.8763 32.868 17.6498 32.868 16.701 33.5085L15.7733 34.1344C14.9972 34.6581 13.9933 34.6581 13.2172 34.1344L12.2895 33.5085C11.3408 32.868 10.1142 32.868 9.16546 33.5085L8.23993 34.133C7.46236 34.6574 6.45777 34.6567 5.68165 34.1315L3.52449 32.6721C3.44688 32.6199 3.40481 32.5292 3.41424 32.4357L5.16739 15.6296C5.3509 13.8706 6.02256 12.2074 7.11057 10.8198C8.1761 9.46127 9.59123 8.4233 11.2029 7.8191C11.3342 7.76977 11.401 7.62325 11.3516 7.49197C11.3023 7.36068 11.1565 7.29395 11.0245 7.34327C9.32503 7.98085 7.83373 9.07466 6.71091 10.5065C5.56415 11.9695 4.85549 13.7226 4.66182 15.5766L2.90868 32.3827C2.87967 32.6627 3.00587 32.9347 3.23943 33.0928L5.39659 34.5522C6.34606 35.1949 7.57334 35.1956 8.52353 34.5544L9.44907 33.9299C10.2252 33.4062 11.2291 33.4062 12.0052 33.9299L12.9329 34.5558C13.8823 35.1963 15.1082 35.1963 16.0569 34.5558L16.9846 33.9299C17.7607 33.4062 18.7646 33.4062 19.5407 33.9299L20.4706 34.5573C20.945 34.8772 21.489 35.0375 22.0323 35.0375C22.5748 35.0375 23.1181 34.8779 23.5917 34.5595L25.7511 33.1059C25.9868 32.947 26.1145 32.6743 26.0847 32.3936Z" fill="#2A3853"/>
                                    <path d="M25.5959 14.1775C25.5175 14.1775 25.4406 14.1412 25.3906 14.073C25.3079 13.9599 25.3326 13.801 25.4457 13.7183L26.9711 12.6049C27.0842 12.5222 27.2431 12.5469 27.3258 12.6601C27.4085 12.7732 27.3838 12.9321 27.2707 13.0148L25.7453 14.1281C25.7003 14.1615 25.6481 14.1775 25.5959 14.1775Z" fill="#F46E94"/>
                                    <path d="M28.2818 20.3922C28.2578 20.3922 28.2339 20.3885 28.21 20.382L26.3973 19.8511C26.2632 19.8119 26.1855 19.6705 26.2254 19.5363C26.2653 19.4021 26.4061 19.3245 26.5402 19.3644L28.3529 19.8953C28.4871 19.9345 28.5647 20.0759 28.5248 20.2101C28.4929 20.3204 28.3913 20.3922 28.2818 20.3922Z" fill="#F46E94"/>
                                    <path d="M3.39899 14.1775C3.34676 14.1775 3.29454 14.1615 3.24957 14.1289L1.72418 13.0155C1.61103 12.9328 1.58636 12.7739 1.66905 12.6608C1.75174 12.5476 1.91059 12.523 2.02374 12.6057L3.54913 13.7191C3.66229 13.8018 3.68695 13.9606 3.60426 14.0738C3.55421 14.1412 3.47732 14.1775 3.39899 14.1775Z" fill="#F46E94"/>
                                    <path d="M0.713068 20.3922C0.603541 20.3922 0.501994 20.3204 0.469354 20.2094C0.430185 20.0745 0.507071 19.9337 0.641259 19.8946L2.45388 19.3636C2.5888 19.3237 2.72951 19.4013 2.76868 19.5355C2.80785 19.6697 2.73096 19.8112 2.59678 19.8503L0.784151 20.3813C0.76094 20.3893 0.737004 20.3922 0.713068 20.3922Z" fill="#F46E94"/>
                                  </svg>
                                </a>

                                <a href="javascript:void(0)" class="foodType">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M30.9888 9.97156C30.3901 9.88507 29.7987 10.1017 29.3646 10.5643L27.8985 12.1291C27.3911 12.6711 26.7744 13.0464 26.1053 13.2321L26.2088 13.9859L28.4008 14.4858C29.3064 14.6921 30.2644 14.416 30.9629 13.7462L34.0878 10.7508L34.1438 10.4262L30.9888 9.97156Z" fill="#5CD1FD"/>
                                    <path d="M9.89609 13.2321C9.227 13.0464 8.61036 12.6711 8.10297 12.1291L6.63685 10.5643C6.20277 10.1009 5.61129 9.88511 5.01262 9.9716L1.85687 10.4271L1.91293 10.7516L5.03778 13.7471C5.73634 14.4168 6.69435 14.6929 7.59989 14.4866L9.79188 13.9867L9.89609 13.2321Z" fill="#5CD1FD"/>
                                    <path d="M13.5865 19.9523C14.1811 19.9523 14.6631 19.4201 14.6631 18.7636C14.6631 18.1071 14.1811 17.575 13.5865 17.575C12.992 17.575 12.5099 18.1071 12.5099 18.7636C12.5099 19.4201 12.992 19.9523 13.5865 19.9523Z" fill="#5CD1FD"/>
                                    <path d="M22.4149 19.9523C23.0095 19.9523 23.4915 19.4201 23.4915 18.7636C23.4915 18.1071 23.0095 17.575 22.4149 17.575C21.8203 17.575 21.3383 18.1071 21.3383 18.7636C21.3383 19.4201 21.8203 19.9523 22.4149 19.9523Z" fill="#5CD1FD"/>
                                    <path d="M10.3489 10.6453C10.4078 10.4755 11.0906 9.19795 11.4794 8.86388C12.1686 8.27272 12.7119 7.99182 13.2344 7.872L13.0109 7.74187C12.8779 7.6649 12.7471 7.58396 12.6178 7.50065C12.0572 7.13881 11.3493 7.19912 10.8404 7.64427C10.7858 7.69188 10.7319 7.74108 10.6795 7.79107C10.5508 7.91327 10.4279 8.04181 10.3108 8.17592C9.7502 8.81945 9.72433 9.83592 10.249 10.5152C10.2518 10.5183 10.2547 10.5223 10.2569 10.5255L10.3489 10.6453Z" fill="#EBECED"/>
                                    <path d="M25.6526 10.6453C25.5936 10.4755 24.9109 9.19795 24.5221 8.86388C23.8328 8.27272 23.2895 7.99182 22.767 7.872L22.9905 7.74187C23.1235 7.6649 23.2543 7.58396 23.3837 7.50065C23.9442 7.13881 24.6521 7.19912 25.161 7.64427C25.2156 7.69188 25.2695 7.74108 25.322 7.79107C25.4506 7.91327 25.5735 8.04181 25.6906 8.17592C26.2512 8.81945 26.2771 9.83592 25.7524 10.5152C25.7496 10.5183 25.7467 10.5223 25.7445 10.5255L25.6526 10.6453Z" fill="#EBECED"/>
                                    <path d="M35.3663 9.44945C35.2528 9.27568 35.0774 9.16062 34.8848 9.13284L31.1512 8.59406C30.1709 8.45281 29.2007 8.80672 28.4899 9.5653L27.0245 11.1301C26.7744 11.3967 26.4783 11.6086 26.1564 11.753L26.1283 11.5475C26.0888 11.2586 26.0248 10.9754 25.9393 10.7024C27.8963 8.17112 29.0253 4.94554 29.1181 1.61838C29.1324 1.09388 28.8241 0.625711 28.3678 0.479707C28.2355 0.437651 28.0968 0.455108 27.9768 0.528904C27.8568 0.6027 27.7698 0.723312 27.7324 0.87011C27.0087 3.70847 25.2379 6.12309 22.8741 7.49585L22.7297 7.57917C22.4379 7.51172 22.1396 7.47601 21.8378 7.47601H14.1636C13.8618 7.47601 13.5635 7.51172 13.2718 7.57917L13.1273 7.49585C10.7635 6.12309 8.9927 3.70847 8.26898 0.87011C8.23161 0.724105 8.14465 0.6027 8.02463 0.528904C7.90461 0.455108 7.76518 0.437651 7.63367 0.479707C7.1773 0.625711 6.86898 1.09388 6.88336 1.61838C6.97607 4.94474 8.10512 8.17112 10.0621 10.7024C9.97658 10.9754 9.91262 11.2586 9.87309 11.5475L9.84506 11.753C9.52381 11.6086 9.22627 11.3967 8.97689 11.1301L7.51149 9.5653C6.80071 8.80672 5.83048 8.45281 4.85019 8.59406L1.11662 9.13284C0.924733 9.16062 0.748654 9.27568 0.635102 9.44945C0.52155 9.62244 0.476991 9.84303 0.512926 10.0533L0.683254 11.0452C0.732125 11.3277 0.867238 11.5871 1.06344 11.776L4.21344 14.7953C4.98962 15.5388 5.99075 15.9411 7.00553 15.9411C7.2887 15.9411 7.5733 15.9094 7.8543 15.8459L8.52484 15.6927C8.66067 15.6618 8.74835 15.515 8.72032 15.3642C8.69229 15.2142 8.55861 15.1174 8.42278 15.1484L7.75225 15.3015C6.61744 15.5602 5.41796 15.2142 4.5426 14.3755L1.3926 11.3562C1.2812 11.2491 1.2043 11.1023 1.17699 10.942L1.00666 9.95015C0.995883 9.88826 1.00882 9.82637 1.04188 9.77558C1.07494 9.7248 1.12453 9.69226 1.18058 9.68433L4.91416 9.14554C5.74137 9.02572 6.56067 9.32487 7.16077 9.96602L8.62761 11.53C8.95173 11.876 9.34414 12.145 9.76816 12.3156L9.26796 15.949C8.93161 18.3938 9.44116 20.8195 10.7039 22.7803C10.7427 22.8406 10.7822 22.9001 10.8218 22.9596C11.8703 24.5109 12.4474 26.4312 12.4474 28.3673C12.4474 29.9083 13.0777 31.289 14.0688 32.2126C14.0832 32.2301 14.0997 32.2452 14.1176 32.2579C14.2693 32.3951 14.4296 32.5221 14.597 32.638C14.8141 34.2504 16.0746 35.4573 17.558 35.4573H18.4441C19.9275 35.4573 21.1874 34.2511 21.4051 32.6388C21.477 32.5896 21.5474 32.5388 21.6171 32.4848C21.8521 32.3023 22.0016 32.0166 22.0268 31.7016L22.2302 29.1862C22.2733 28.649 22.1094 28.1126 21.7796 27.7151C21.4497 27.3175 20.9811 27.089 20.4924 27.089H15.5076C15.0196 27.089 14.5503 27.3175 14.2204 27.7151C13.8905 28.1126 13.7267 28.649 13.7698 29.1862L13.9409 31.2969C13.3235 30.5114 12.9498 29.487 12.9498 28.3681C12.9498 26.3138 12.3367 24.2752 11.2242 22.6287C11.1868 22.5732 11.1495 22.5168 11.1128 22.4597C9.92627 20.6172 9.44763 18.3351 9.76457 16.0339L10.3704 11.6324C10.6572 9.54626 12.2527 8.03305 14.1636 8.03305H21.8371C23.748 8.03305 25.3428 9.54705 25.6303 11.6324L26.2361 16.0339C26.5531 18.3351 26.0737 20.6172 24.8879 22.4597C24.8512 22.516 24.8146 22.5724 24.7765 22.6279C23.6632 24.2744 23.0509 26.313 23.0509 28.3673C23.0509 28.9458 22.9525 29.5084 22.7584 30.04C22.7067 30.1821 22.7685 30.3439 22.8978 30.4011C23.0265 30.4582 23.1731 30.3892 23.2248 30.2471C23.4433 29.6496 23.554 29.0164 23.554 28.3665C23.554 26.4304 24.1318 24.5101 25.1804 22.9588C25.2206 22.8993 25.2594 22.8398 25.2982 22.7803C26.5603 20.8195 27.0705 18.3938 26.7342 15.949L26.2347 12.3164C26.6594 12.1458 27.0504 11.8768 27.3752 11.53L28.8406 9.96523C29.4407 9.32487 30.2601 9.02572 31.0873 9.14475L34.8208 9.68354C34.8769 9.69147 34.9265 9.724 34.9603 9.77479C34.9933 9.82557 35.0063 9.88747 34.9955 9.94936L34.8251 10.9412C34.7978 11.1015 34.7209 11.2491 34.6095 11.3562L31.4595 14.3755C30.5842 15.2142 29.3847 15.5602 28.2499 15.3015L27.6793 15.1714C27.5434 15.1404 27.4105 15.2373 27.3817 15.3872C27.3537 15.5372 27.4414 15.684 27.5772 15.7157L28.1478 15.8459C28.4288 15.9101 28.7134 15.9411 28.9966 15.9411C30.0114 15.9411 31.0125 15.5388 31.7887 14.7953L34.9387 11.776C35.1356 11.5871 35.2707 11.3285 35.3189 11.0452L35.4892 10.0533C35.5244 9.84303 35.4799 9.62244 35.3663 9.44945ZM18.4441 34.901H17.558C16.457 34.901 15.5033 34.102 15.182 32.9776C15.7404 33.2482 16.3571 33.3989 17.0053 33.3989H18.9961C19.6314 33.3989 20.2495 33.2553 20.8201 32.9792C20.4981 34.1036 19.5452 34.901 18.4441 34.901ZM14.5927 28.0888C14.8306 27.8016 15.1561 27.6437 15.5083 27.6437H20.4931C20.846 27.6437 21.1708 27.8016 21.4087 28.0888C21.6466 28.3761 21.7609 28.7482 21.7292 29.1354L21.5259 31.6508C21.5136 31.8024 21.4411 31.9405 21.3275 32.0293C20.6426 32.5618 19.8362 32.8435 18.9961 32.8435H17.0053C16.0574 32.8435 15.1849 32.4824 14.4935 31.8786L14.2714 29.1354C14.2405 28.7482 14.3548 28.3761 14.5927 28.0888ZM10.282 10.1263C8.49968 7.72438 7.4734 4.70907 7.38716 1.60172C7.37997 1.33113 7.5388 1.08912 7.77453 1.01373L7.78603 1.02088C8.51549 3.88145 10.2569 6.33337 12.589 7.80294C12.5897 7.80294 12.5904 7.80373 12.5919 7.80373C12.1377 7.99893 11.7122 8.27824 11.3363 8.63453C10.8943 9.05191 10.5379 9.56054 10.282 10.1263ZM23.4139 7.80214C25.746 6.33258 27.4874 3.88066 28.2204 1.01453C28.224 1.01294 28.2262 1.01294 28.2269 1.01373C28.4626 1.08912 28.6214 1.33113 28.6143 1.60172C28.5273 4.70828 27.5017 7.72438 25.7194 10.1263C25.4635 9.56054 25.1071 9.05191 24.6665 8.63373C24.2914 8.27824 23.8666 7.99972 23.4131 7.80373C23.4131 7.80373 23.4131 7.80294 23.4139 7.80214Z" fill="#2A3853"/>
                                    <path d="M19.6774 30.924C19.8161 30.924 19.9289 30.7994 19.9289 30.6463V29.4965C19.9289 29.3433 19.8161 29.2188 19.6774 29.2188C19.5387 29.2188 19.4259 29.3433 19.4259 29.4965V30.6463C19.4259 30.8002 19.5387 30.924 19.6774 30.924Z" fill="#2A3853"/>
                                    <path d="M16.324 30.924C16.4627 30.924 16.5756 30.7994 16.5756 30.6463V29.4965C16.5756 29.3433 16.4627 29.2188 16.324 29.2188C16.1853 29.2188 16.0725 29.3433 16.0725 29.4965V30.6463C16.0725 30.8002 16.1846 30.924 16.324 30.924Z" fill="#2A3853"/>
                                    <path d="M28.7558 19.3071C28.6315 19.3071 28.523 19.2047 28.5065 19.0651C28.4885 18.9127 28.5862 18.7739 28.7235 18.754L30.5799 18.4898C30.7171 18.4699 30.8436 18.5779 30.8616 18.7294C30.8796 18.8818 30.7818 19.0206 30.6446 19.0405L28.7882 19.3047C28.7774 19.3063 28.7666 19.3071 28.7558 19.3071Z" fill="#F46E94"/>
                                    <path d="M28.1227 26.6804C28.058 26.6804 27.9933 26.6534 27.9445 26.5986L26.6242 25.1346C26.5265 25.0259 26.5265 24.8498 26.6249 24.7418C26.7234 24.6339 26.8822 24.6339 26.9807 24.7426L28.3009 26.2067C28.3987 26.3154 28.3987 26.4915 28.3002 26.5994C28.2513 26.6534 28.1866 26.6804 28.1227 26.6804Z" fill="#F46E94"/>
                                    <path d="M7.24557 19.3071C7.23479 19.3071 7.22401 19.3063 7.21323 19.3047L5.35687 19.0405C5.21888 19.0206 5.12186 18.8818 5.13982 18.7294C5.15779 18.5771 5.28356 18.47 5.42155 18.4898L7.27791 18.754C7.4159 18.7739 7.51292 18.9127 7.49496 19.0651C7.47843 19.2047 7.37062 19.3071 7.24557 19.3071Z" fill="#F46E94"/>
                                    <path d="M7.87874 26.6804C7.81478 26.6804 7.75009 26.6534 7.70122 26.5994C7.60276 26.4915 7.60276 26.3154 7.70051 26.2067L9.02073 24.7426C9.11919 24.6339 9.27802 24.6339 9.37648 24.7418C9.47494 24.8498 9.47494 25.0259 9.3772 25.1346L8.05697 26.5986C8.0081 26.6534 7.94342 26.6804 7.87874 26.6804Z" fill="#F46E94"/>
                                  </svg>
                                </a>

                                <a href="javascript:void(0)" class="foodType">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                    <path d="M17.5049 34.9993C12.8305 34.9993 8.43586 33.179 5.13063 29.8737C1.82533 26.5685 0.00500488 22.1739 0.00500488 17.4996C0.00500488 12.8253 1.82533 8.43076 5.13063 5.12552C8.43593 1.82029 12.8306 0 17.5049 0C20.3917 0 23.5858 0.853308 26.2682 2.3412C26.7633 2.61591 26.9421 3.23989 26.6674 3.73517C26.3928 4.23032 25.7688 4.40899 25.2735 4.13442C22.8861 2.81003 20.0545 2.05057 17.5049 2.05057C13.3783 2.05057 9.49856 3.65759 6.58061 6.57548C3.66267 9.49336 2.05561 13.373 2.05561 17.4996C2.05561 21.6261 3.66267 25.5058 6.58061 28.4237C9.49856 31.3416 13.3783 32.9486 17.5049 32.9486C21.6316 32.9486 25.5113 31.3416 28.4293 28.4237C31.3473 25.5058 32.9543 21.6261 32.9543 17.4996C32.9543 15.3084 32.5121 13.2095 31.64 11.2612C31.4086 10.7444 31.64 10.1379 32.1569 9.90655C32.6737 9.67484 33.2802 9.90655 33.5116 10.4234C34.5025 12.6369 35.005 15.0177 35.005 17.4996C35.005 22.1739 33.1847 26.5685 29.8794 29.8737C26.574 33.179 22.1794 34.9993 17.5049 34.9993Z" fill="#00DD7B"/>
                                    <path d="M32.1569 9.90606C31.64 10.1374 31.4087 10.744 31.64 11.2607C32.5122 13.209 32.9543 15.3079 32.9543 17.4991C32.9543 21.6257 31.3473 25.5053 28.4293 28.4232C25.527 31.3254 21.6733 32.9301 17.5714 32.9473V34.9979C22.2209 34.9806 26.5897 33.1627 29.8792 29.8732C33.1845 26.568 35.0049 22.1734 35.0049 17.4991C35.0049 15.0172 34.5024 12.6364 33.5114 10.4229C33.2802 9.90606 32.6737 9.67435 32.1569 9.90606Z" fill="#00BD9F"/>
                                    <path d="M26.6674 3.73449C26.9422 3.23928 26.7633 2.61522 26.2682 2.34052C23.6064 0.864108 20.4408 0.0129186 17.5715 0V2.05057C20.1037 2.06362 22.9068 2.82089 25.2735 4.13373C25.7688 4.40837 26.3929 4.2297 26.6674 3.73449Z" fill="#00BD9F"/>
                                    <path d="M30.0907 12.3528L24.9972 13.4124C24.819 13.4494 24.6446 13.335 24.6075 13.1569L23.5479 8.06345C22.8544 4.73012 24.9945 1.46576 28.3279 0.772259L31.8266 0.0443764C32.8856 -0.175923 33.9226 0.503908 34.1429 1.56282L34.8708 5.06149C35.5642 8.39489 33.4241 11.6593 30.0907 12.3528Z" fill="#8CEA79"/>
                                    <path d="M34.1437 1.56159C34.0379 1.05332 33.7437 0.632818 33.3495 0.356812L24.8036 13.3923C24.863 13.4172 24.9301 13.4252 24.9979 13.4111L30.0915 12.3515C33.4249 11.658 35.565 8.39366 34.8716 5.06033L34.1437 1.56159Z" fill="#00DD7B"/>
                                    <path d="M17.5025 35C17.4659 35 17.4298 34.9981 17.3942 34.9942C16.9399 34.9447 16.5817 34.6028 16.4982 34.1685C15.1029 27.5223 13.4018 21.6903 11.4419 16.8341C9.87573 12.9534 8.14304 9.68644 6.29189 7.12399C4.65441 4.85736 2.28002 3.16332 1.37181 2.48814C1.03721 2.24104 0.746097 2.05342 0.508569 1.91412C0.103574 1.67666 -0.0852866 1.19197 0.046704 0.741397C0.234813 0.0995703 0.974603 -0.192499 1.55274 0.143794C2.70484 0.814056 5.54 2.66038 7.73668 5.62591C9.72037 8.30409 11.5674 11.7197 13.2263 15.778C14.852 19.7551 16.3032 24.3699 17.5553 29.5383C19.2485 23.4308 22.3986 13.153 28.6923 5.48934C29.0516 5.05162 29.6977 4.98839 30.1353 5.34772C30.5729 5.70705 30.6363 6.35311 30.2769 6.7907C22.4874 16.2759 19.4261 30.0274 18.5476 34.016C18.534 34.078 18.5235 34.1251 18.5164 34.1567C18.3821 34.7478 17.9169 35 17.5025 35Z" fill="#00BD9F"/>
                                    <path d="M30.1354 5.35032C29.6978 4.99099 29.0517 5.05421 28.6924 5.49194C22.4185 13.1314 19.2712 23.3682 17.5715 29.4826V34.9999C17.9672 34.9734 18.3895 34.7178 18.5164 34.1593C18.5235 34.1277 18.534 34.0806 18.5476 34.0185C19.4261 30.0299 22.4874 16.2785 30.277 6.79316C30.6364 6.35571 30.573 5.70957 30.1354 5.35032Z" fill="#007779"/>
                                  </svg>
                                </a>
                              </div>

                              <h4 class="mt-4">
                                . Select Allergys .
                              </h4>
                              <div class="row itemTypeGrid">
                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. A .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>
                              </div>


                              <h4 class="mt-4">
                                . Select Additives .
                              </h4>
                              <div class="row itemTypeGrid">
                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 1 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 2 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 3 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 4 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 5 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 6 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 7 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 8 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>

                                <div class="col-md-4 bg-white">
                                  <h4 class="text-center m-0">. 9 .</h4>
                                  <p class="text-center m-0">. Alergys Title .</p>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade bd-example-modal-lg" id="addFoodExtra" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          {{-- <a href="javascript:void(0)" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                              <path d="M7 7L1 13M7 7L1 1M7 7L13 1M7 7L13 13" stroke="#FC5566" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </a> --}}
                          <div class="row">
                            <div class="col-md-7">
                              <div class="row">
                                <div class="col-md-6">
                                  <h4>
                                    Food Categorys
                                  </h4>
                                </div>
                                <div class="col-md-6">
                                  <h4>Available Food Size</h4>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <h4>Food Extras</h4>
                            </div>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-7">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="accordion foodCategories" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Burger <span class="btn-checkbox"><input type="checkbox" name="" id=""><label for="">Select Category</label></span>
                                        </button>
                                      </h2>
                                      <span class="quantity">Total Items 10</span>
                                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                          <label for="">101. Pizza Margherita</label>
                                          <input type="checkbox" style="float: right" name="" id="">
                                          <div class="foodExtras">
                                            <div class="radio-collection">
                                              <span>
                                              <input type='radio' name='fulfillment-3' value='delivery' id='Standard' checked>
                                            <label for='Standard' class="">Standard</label>
                                              </span>

                                              <span>
                                            <input type='radio' name='fulfillment-3' value='pickup' id='Size-M'>
                                            <label for='Size-M'>Size M</label>
                                              </span>
                                            <span>
                                            <input type='radio' name='fulfillment-3' value='pickup' id='Size-L'>
                                            <label for='Size-L'>Size L</label>
                                            </span>

                                            </div>
                                          </div>
                                        </div>

                                        <div class="accordion-body">
                                          <label for="">102. Pizza Calzone</label>
                                          <input type="checkbox" style="float: right" name="" id="">
                                          <div class="foodExtras">
                                            <div class="radio-collection">
                                              <span>
                                              <input type='radio' name='fulfillment-4' value='delivery' id='Standard' >
                                            <label for='Standard' style="width:100px">Standard</label>
                                              </span>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="foodExtraVariation">
                                    <label for="">
                                      101. Pizza Margherita
                                    </label>
                                    <div class="addSize">
                                      <select name="" id="" class="size">
                                        <option value="">Select Size</option>
                                      </select>
                                      <label for="" class="maxAddLabel">Max. Add</label>
                                      <select name="" id="" class="maxAdd">
                                        <option value=""></option>
                                      </select>
                                      <label for="" class="addPriceLabel">Max. Add</label>
                                      <input type="text" name="" class="" class="addPrice" id="">
                                    </div>
                                    <p class="text-center mt-2 mb-2">Your Adds</p>

                                    <div class="add-list">
                                      <div class="add-item">
                                        <label for="">Milk Adds</label>
                                        <span>Salami</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Chicken Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Chicken Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Milk Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                    </div>
                                  </div>
                                  <hr>
                                  <div class="foodExtraVariation">
                                    <label for="">
                                      Category Name
                                    </label>
                                    <div class="addSize">
                                      <select name="" id="" class="size">
                                        <option value="">Select Size</option>
                                      </select>
                                      <label for="" class="maxAddLabel">Max. Add</label>
                                      <select name="" id="" class="maxAdd">
                                        <option value=""></option>
                                      </select>
                                      <label for="" class="addPriceLabel">Max. Add</label>
                                      <input type="text" name="" class="" class="addPrice" id="">
                                    </div>
                                    <p class="text-center mt-2 mb-2">Your Adds</p>

                                    <div class="add-list">
                                      <div class="add-item">
                                        <label for="">Milk Adds</label>
                                        <span>Salami</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Chicken Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Chicken Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                      <div class="add-item">
                                        <label for="">Milk Adds</label>
                                        <span>Chicken</span>
                                        <span>Price</span>
                                        <input type="text" value="0,00">
                                        <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                          <circle opacity="0.5" cx="6" cy="6" r="5" stroke="#1C274C" stroke-width="0.8"/>
                                          <path d="M7.24999 4.75001L4.75 7.25M4.74999 4.75L7.24998 7.24999" stroke="#1C274C" stroke-width="0.8" stroke-linecap="round"/>
                                        </svg></a>
                                      </div>

                                    </div>
                                  </div>
                                  <hr>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <h5>Milk Adds</h5>
                              <div class="foodExtras">
                                <div class="radio-collection">
                                  <span>
                                  <input type='radio' name='fulfillment-2' value='delivery' id='Cheese' checked>
                                <label for='Cheese'>Cheese</label>
                                  </span>

                                  <span>
                                <input type='radio' name='fulfillment-2' value='pickup' id='Mozzerlla'>
                                <label for='Mozzerlla'>Mozzerlla</label>
                                  </span>

                                    <span>
                                <input type='radio' name='fulfillment-2' value='pickup' id='White-cheese'>
                                <label for='White-cheese'>White cheese</label>
                                  </span>

                                <span>
                                <input type='radio' name='fulfillment-2' value='pickup' id='Joghur'>
                                <label for='Joghur'>Joghur</label>
                                </span>

                                </div>
                              </div>

                              <h5 class="mt-5">Chicken Adds</h5>
                              <div class="foodExtras">
                                <div class="radio-collection">
                                  <span>
                                  <input type='radio' name='fulfillment-3' value='delivery' id='Eggs' checked>
                                <label for='Eggs'>Eggs</label>
                                  </span>

                                  <span>
                                <input type='radio' name='fulfillment-3' value='pickup' id='Nuggets'>
                                <label for='Nuggets'>Nuggets</label>
                                  </span>

                                    <span>
                                <input type='radio' name='fulfillment-3' value='pickup' id='Chest'>
                                <label for='Chest'>Chest</label>
                                  </span>

                                <span>
                                <input type='radio' name='fulfillment-3' value='pickup' id='Joghur'>
                                <label for='Joghur'>Joghur</label>
                                </span>

                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
            <div class="app-overlay"></div>
        </div>
    </div>
@endsection
