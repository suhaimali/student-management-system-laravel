<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Employee - Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- Header / Navbar -->
        @include('inc.header')

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('inc.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title mb-0">Add New Employee</h4>
                                        <a href="{{ route('employee') }}" class="btn btn-light btn-sm">Back to List</a>
                                    </div>
                                    <p class="card-description">Enter employee details below</p>

                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('store.employee') }}" class="forms-sample">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="department">Department</label>
                                            <input type="text" name="department" class="form-control" id="department" placeholder="e.g. General Medicine" value="{{ old('department') }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="salary">Salary</label>
                                            <input type="text" name="salary" class="form-control" id="salary" placeholder="e.g. 50000 or 1.5k" value="{{ old('salary') }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="joining_date">Joining Date</label>
                                            <input type="date" name="joining_date" class="form-control" id="joining_date" value="{{ old('joining_date', date('Y-m-d')) }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="address">Address</label>
                                            <textarea name="address" class="form-control" id="address" rows="3" placeholder="Enter address">{{ old('address') }}</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{ route('employee') }}" class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('inc.footer')
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
</body>

</html>
