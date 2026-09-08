<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Product - Skydash Admin</title>
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
                                        <h4 class="card-title mb-0">Add New Product</h4>
                                        <a href="{{ route('product') }}" class="btn btn-light btn-sm">Back to List</a>
                                    </div>
                                    <p class="card-description">Enter product details below</p>

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

                                    <form method="POST" action="{{ route('store.product') }}" class="forms-sample">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="product_name">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter product name" value="{{ old('product_name') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="product_code">Product Code <span class="text-danger">*</span></label>
                                            <input type="text" name="product_code" class="form-control" id="product_code" placeholder="Enter product code" value="{{ old('product_code') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="category">Category</label>
                                            <input type="text" name="category" class="form-control" id="category" placeholder="e.g. Electronics, Clothing" value="{{ old('category') }}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="price">Price <span class="text-danger">*</span></label>
                                            <input type="number" step="0.01" min="0" name="price" class="form-control" id="price" placeholder="Enter price" value="{{ old('price') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="quantity">Quantity <span class="text-danger">*</span></label>
                                            <input type="number" min="0" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity" value="{{ old('quantity') }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter product description">{{ old('description') }}</textarea>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="manufacturing_date">Manufacturing Date</label>
                                            <input type="date" name="manufacturing_date" class="form-control" id="manufacturing_date" value="{{ old('manufacturing_date') }}">
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{ route('product') }}" class="btn btn-light">Cancel</a>
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
