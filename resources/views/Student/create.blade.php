<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Skydash Admin - Add Student</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
</head>

<body>

<div class="container-scroller">

    <!-- Banner -->
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">

                <div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">
                            Free 24/7 customer support, updates, and more with this template!
                        </p>

                        <a href="https://www.bootstrapdash.com/product/skydash-admin-template"
                           target="_blank"
                           class="btn me-2 buy-now-btn border-0">
                            Buy Now
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between">

                    <a href="#">
                        <i class="ti-home me-3 text-white"></i>
                    </a>

                    <button id="bannerClose" class="btn border-0 p-0" type="button">
                        <i class="ti-close text-white"></i>
                    </button>

                </div>

            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Header -->
    @include('inc.header')


    <!-- Page Body -->
    <div class="container-fluid page-body-wrapper">

        <!-- Sidebar -->
        @include('inc.sidebar')


        <!-- Main Panel -->
        <div class="main-panel">

            <div class="content-wrapper">

                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">
                                    Add Student
                                </h4>

                                <p class="card-description">
                                    Enter student details
                                </p>


                                <!-- Success Message -->
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <!-- Validation Errors -->
                                @if($errors->any())

                                    <div class="alert alert-danger">

                                        <ul class="mb-0">

                                            @foreach($errors->all() as $error)

                                                <li>{{ $error }}</li>

                                            @endforeach

                                        </ul>

                                    </div>

                                @endif


                                <!-- Student Form -->
                                <form method="POST"
                                      action="{{ route('store.student') }}"
                                      class="forms-sample">

                                    @csrf


                                    <!-- Name -->
                                    <div class="form-group mb-3">

                                        <label for="name">
                                            Name
                                        </label>

                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                            placeholder="Enter student name"
                                            value="{{ old('name') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Email -->
                                    <div class="form-group mb-3">

                                        <label for="email">
                                            Email
                                        </label>

                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            class="form-control"
                                            placeholder="Enter student email"
                                            value="{{ old('email') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Phone -->
                                    <div class="form-group mb-3">

                                        <label for="phone">
                                            Phone
                                        </label>

                                        <input
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            class="form-control"
                                            placeholder="Enter phone number"
                                            value="{{ old('phone') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Address -->
                                    <div class="form-group mb-3">

                                        <label for="address">
                                            Address
                                        </label>

                                        <input
                                            type="text"
                                            name="address"
                                            id="address"
                                            class="form-control"
                                            placeholder="Enter address"
                                            value="{{ old('address') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Class -->
                                    <div class="form-group mb-3">

                                        <label for="class">
                                            Class
                                        </label>

                                        <input
                                            type="text"
                                            name="class"
                                            id="class"
                                            class="form-control"
                                            placeholder="Enter class"
                                            value="{{ old('class') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Aadhar -->
                                    <div class="form-group mb-3">

                                        <label for="aadhar_card_number">
                                            Aadhar Card Number
                                        </label>

                                        <input
                                            type="text"
                                            name="aadhar_card_number"
                                            id="aadhar_card_number"
                                            class="form-control"
                                            placeholder="Enter Aadhar card number"
                                            value="{{ old('aadhar_card_number') }}"
                                            required
                                        >

                                    </div>


                                    <!-- Buttons -->
                                    <button
                                        type="submit"
                                        class="btn btn-primary me-2">
                                        Submit
                                    </button>

                                    <a href="{{ route('student') }}" class="btn btn-light">
                                        Cancel
                                    </a>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- content-wrapper ends -->


            <!-- Footer -->
            @include('inc.footer')
            <!-- Footer ends -->

        </div>
        <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->

</div>
<!-- container-scroller -->


<!-- plugins:js -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

<!-- Plugin js -->
<script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>

<script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>

<script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>

<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>

<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>

<script src="{{ asset('assets/js/template.js') }}"></script>

<script src="{{ asset('assets/js/settings.js') }}"></script>

<script src="{{ asset('assets/js/todolist.js') }}"></script>

<!-- Custom js -->
<script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>

<script src="{{ asset('assets/js/dashboard.js') }}"></script>

</body>

</html>