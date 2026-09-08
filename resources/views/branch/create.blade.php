
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Skydash Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/select.dataTables.min.css') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
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
                                Free 24/7 customer support, updates,
                                and more with this template!
                            </p>

                            <a href="https://www.bootstrapdash.com/product/skydash-admin-template"
                                target="_blank"
                                class="btn me-2 buy-now-btn border-0">
                                Buy Now
                            </a>

                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-between">

                        <a href="{{ route('branch') }}">
                            <i class="ti-home me-3 text-white"></i>
                        </a>

                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="ti-close text-white"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>
        <!-- Banner End -->


        <!-- Navbar -->
        @include('inc.header')
        <!-- Navbar End -->


        <div class="container-fluid page-body-wrapper">

            <!-- Sidebar -->
            @include('inc.sidebar')
            <!-- Sidebar End -->


            <div class="main-panel">

                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">

                        <div class="card-body">

                            <h4 class="card-title">
                                Branch Table
                            </h4>

                            <p class="card-description">
                                Add Branch
                            </p>


                            <div class="table-responsive">

                                <div class="col-md-6 grid-margin stretch-card">

                                    <div class="card">

                                        <div class="card-body">

                                            <h4 class="card-title">
                                                Add Branch
                                            </h4>


                                            {{-- Success Message --}}
                                            @if(session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif


                                            {{-- Validation Errors --}}
                                            @if ($errors->any())

                                                <div class="alert alert-danger">

                                                    @foreach ($errors->all() as $error)
                                                        <div>{{ $error }}</div>
                                                    @endforeach

                                                </div>

                                            @endif


                                            <form method="POST"
                                                action="{{ route('branch.store') }}"
                                                class="forms-sample">

                                                @csrf


                                                <!-- Name -->
                                                <div class="form-group">

                                                    <label for="name">
                                                        Name
                                                    </label>

                                                    <input
                                                        type="text"
                                                        name="name"
                                                        class="form-control"
                                                        id="name"
                                                        placeholder="Enter your branch name"
                                                        value="{{ old('name') }}"
                                                        required
                                                    >

                                                </div>


                                                <!-- Code -->
                                                <div class="form-group">

                                                    <label for="code">
                                                        Code
                                                    </label>

                                                    <input
                                                        type="text"
                                                        name="code"
                                                        class="form-control"
                                                        id="code"
                                                        placeholder="Enter branch code"
                                                        value="{{ old('code') }}"
                                                        required
                                                    >

                                                </div>


                                                <!-- Phone -->
                                                <div class="form-group">

                                                    <label for="phone">
                                                        Phone
                                                    </label>

                                                    <input
                                                        type="text"
                                                        name="phone"
                                                        class="form-control"
                                                        id="phone"
                                                        placeholder="Enter phone number"
                                                        value="{{ old('phone') }}"
                                                    >

                                                </div>


                                                <!-- Address -->
                                                <div class="form-group">

                                                    <label for="address">
                                                        Address
                                                    </label>

                                                    <textarea
                                                        name="address"
                                                        class="form-control"
                                                        id="address"
                                                        rows="4"
                                                        placeholder="Enter branch address"
                                                    >{{ old('address') }}</textarea>

                                                </div>


                                                <!-- Status -->
                                                <div class="form-group">

                                                    <label for="status">
                                                        Status
                                                    </label>

                                                    <select
                                                        name="status"
                                                        class="form-control"
                                                        id="status"
                                                    >

                                           <option value="1">Active</option>
                                         <option value="0">Inactive</option>
 


                                                    </select>

                                                </div>


                                                <!-- Submit -->
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary me-2">
                                                    Submit
                                                </button>


                                                <!-- Cancel -->
                                                <a
                                                    href="{{ route('branch') }}"
                                                    class="btn btn-light">
                                                    Cancel
                                                </a>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Footer -->
                @include('inc.footer')
                <!-- Footer End -->

            </div>

        </div>

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
    <script src="{{ asset('assets/js/jquery.cookie.js') }}"
        type="text/javascript"></script>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>

</body>

</html>

