@extends('admin.app')

@section('title', 'Customers')

@section('content')

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Customers
        </h2>

        <p class="text-muted mb-0">
            Manage registered customers
        </p>
    </div>

    <div>
        <button class="btn btn-outline-dark">
            <i class="bi bi-download me-1"></i>
            Export
        </button>
    </div>

</div>


<!-- Statistics -->
<div class="row g-4 mb-4">

    <!-- Total Customers -->
    <div class="col-lg-4 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            Total Customers
                        </div>

                        <div class="card-number">
                            120
                        </div>

                    </div>

                    <div class="card-icon">

                        <i class="bi bi-people"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Active Customers -->
    <div class="col-lg-4 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            Active Customers
                        </div>

                        <div class="card-number">
                            98
                        </div>

                    </div>

                    <div class="card-icon">

                        <i class="bi bi-person-check"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- New Customers -->
    <div class="col-lg-4 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            New This Month
                        </div>

                        <div class="card-number">
                            15
                        </div>

                    </div>

                    <div class="card-icon">

                        <i class="bi bi-person-plus"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Search and Filter -->
<div class="card dashboard-card mb-4">

    <div class="card-body">

        <div class="row g-3">

            <!-- Search -->
            <div class="col-md-6">

                <label class="form-label">
                    Search Customer
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Name, phone or email">

                </div>

            </div>


            <!-- City -->
            <div class="col-md-3">

                <label class="form-label">
                    City
                </label>

                <select class="form-select">

                    <option selected>
                        All Cities
                    </option>

                    <option>
                        Karachi
                    </option>

                    <option>
                        Lahore
                    </option>

                    <option>
                        Islamabad
                    </option>

                    <option>
                        Rawalpindi
                    </option>

                    <option>
                        Hyderabad
                    </option>

                </select>

            </div>


            <!-- Search Button -->
            <div class="col-md-3 d-flex align-items-end">

                <button class="btn btn-dark w-100">

                    <i class="bi bi-search me-1"></i>

                    Search

                </button>

            </div>

        </div>

    </div>

</div>


<!-- Customers Table -->
<div class="card dashboard-card">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>

                <h5 class="mb-1">
                    Customer List
                </h5>

                <small class="text-muted">
                    All registered customers
                </small>

            </div>

            <span class="badge bg-secondary">
                120 Customers
            </span>

        </div>


        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>#</th>

                        <th>Customer</th>

                        <th>Contact</th>

                        <th>City</th>

                        <th>Total Shipments</th>

                        <th>Last Shipment</th>

                        <th>Status</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                    <!-- Customer 1 -->

                    <tr>

                        <td>
                            1
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    AK
                                </div>

                                <div>

                                    <strong>
                                        Ali Khan
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Customer ID: CU-001
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            03001234567

                            <br>

                            <small class="text-muted">
                                ali@gmail.com
                            </small>

                        </td>


                        <td>
                            Karachi
                        </td>


                        <td>

                            <span class="badge bg-info text-dark">
                                18
                            </span>

                        </td>


                        <td>
                            29 Aug 2026
                        </td>


                        <td>

                            <span class="badge bg-success">
                                Active
                            </span>

                        </td>


                        <td>

                            <div class="dropdown">

                                <button
                                    class="btn btn-sm btn-light"
                                    data-bs-toggle="dropdown">

                                    <i class="bi bi-three-dots-vertical"></i>

                                </button>


                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-eye me-2"></i>

                                            View Details

                                        </a>

                                    </li>


                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-box-seam me-2"></i>

                                            View Shipments

                                        </a>

                                    </li>


                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Customer 2 -->

                    <tr>

                        <td>
                            2
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    SA
                                </div>

                                <div>

                                    <strong>
                                        Sara Ahmed
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Customer ID: CU-002
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            03111234567

                            <br>

                            <small class="text-muted">
                                sara@gmail.com
                            </small>

                        </td>


                        <td>
                            Lahore
                        </td>


                        <td>

                            <span class="badge bg-info text-dark">
                                12
                            </span>

                        </td>


                        <td>
                            28 Aug 2026
                        </td>


                        <td>

                            <span class="badge bg-success">
                                Active
                            </span>

                        </td>


                        <td>

                            <div class="dropdown">

                                <button
                                    class="btn btn-sm btn-light"
                                    data-bs-toggle="dropdown">

                                    <i class="bi bi-three-dots-vertical"></i>

                                </button>


                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-eye me-2"></i>

                                            View Details

                                        </a>

                                    </li>


                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-box-seam me-2"></i>

                                            View Shipments

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Customer 3 -->

                    <tr>

                        <td>
                            3
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    MN
                                </div>

                                <div>

                                    <strong>
                                        Muhammad Noor
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Customer ID: CU-003
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            03221234567

                            <br>

                            <small class="text-muted">
                                noor@gmail.com
                            </small>

                        </td>


                        <td>
                            Islamabad
                        </td>


                        <td>

                            <span class="badge bg-info text-dark">
                                7
                            </span>

                        </td>


                        <td>
                            25 Aug 2026
                        </td>


                        <td>

                            <span class="badge bg-secondary">
                                Inactive
                            </span>

                        </td>


                        <td>

                            <div class="dropdown">

                                <button
                                    class="btn btn-sm btn-light"
                                    data-bs-toggle="dropdown">

                                    <i class="bi bi-three-dots-vertical"></i>

                                </button>


                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-eye me-2"></i>

                                            View Details

                                        </a>

                                    </li>


                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-box-seam me-2"></i>

                                            View Shipments

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Customer 4 -->

                    <tr>

                        <td>
                            4
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    HA
                                </div>

                                <div>

                                    <strong>
                                        Hassan Ali
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Customer ID: CU-004
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            03331234567

                            <br>

                            <small class="text-muted">
                                hassan@gmail.com
                            </small>

                        </td>


                        <td>
                            Hyderabad
                        </td>


                        <td>

                            <span class="badge bg-info text-dark">
                                9
                            </span>

                        </td>


                        <td>
                            27 Aug 2026
                        </td>


                        <td>

                            <span class="badge bg-success">
                                Active
                            </span>

                        </td>


                        <td>

                            <div class="dropdown">

                                <button
                                    class="btn btn-sm btn-light"
                                    data-bs-toggle="dropdown">

                                    <i class="bi bi-three-dots-vertical"></i>

                                </button>


                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-eye me-2"></i>

                                            View Details

                                        </a>

                                    </li>


                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-box-seam me-2"></i>

                                            View Shipments

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- Pagination -->

        <div class="d-flex justify-content-between align-items-center mt-3">

            <small class="text-muted">
                Showing 1 to 4 of 120 customers
            </small>


            <nav>

                <ul class="pagination mb-0">

                    <li class="page-item disabled">

                        <a class="page-link" href="#">
                            Previous
                        </a>

                    </li>


                    <li class="page-item active">

                        <a class="page-link" href="#">
                            1
                        </a>

                    </li>


                    <li class="page-item">

                        <a class="page-link" href="#">
                            2
                        </a>

                    </li>


                    <li class="page-item">

                        <a class="page-link" href="#">
                            3
                        </a>

                    </li>


                    <li class="page-item">

                        <a class="page-link" href="#">
                            Next
                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </div>

</div>

@endsection
