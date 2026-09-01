@extends('admin.app')

@section('title', 'Shipments')

@section('content')

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Shipments
        </h2>

        <p class="text-muted mb-0">
            Manage and track all courier shipments
        </p>
    </div>

    <a href="#" class="btn btn-primary">

        <i class="bi bi-plus-lg me-1"></i>

        Create Shipment

    </a>

</div>


<!-- Shipment Statistics -->
<div class="row g-4 mb-4">

    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            Total Shipments
                        </div>

                        <div class="card-number">
                            350
                        </div>

                    </div>

                    <div class="card-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            Pending
                        </div>

                        <div class="card-number">
                            45
                        </div>

                    </div>

                    <div class="card-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            In Transit
                        </div>

                        <div class="card-number">
                            82
                        </div>

                    </div>

                    <div class="card-icon">
                        <i class="bi bi-truck"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="card-title">
                            Delivered
                        </div>

                        <div class="card-number">
                            223
                        </div>

                    </div>

                    <div class="card-icon">
                        <i class="bi bi-check-circle"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Search & Filters -->
<div class="card dashboard-card mb-4">

    <div class="card-body">

        <div class="row g-3">

            <!-- Tracking Search -->
            <div class="col-md-4">

                <label class="form-label">
                    Search Shipment
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Tracking number, sender or receiver">

                </div>

            </div>


            <!-- Status -->
            <div class="col-md-2">

                <label class="form-label">
                    Status
                </label>

                <select class="form-select">

                    <option selected>
                        All Status
                    </option>

                    <option>
                        Pending
                    </option>

                    <option>
                        Picked Up
                    </option>

                    <option>
                        In Transit
                    </option>

                    <option>
                        Delivered
                    </option>

                    <option>
                        Cancelled
                    </option>

                </select>

            </div>


            <!-- Agent -->
            <div class="col-md-2">

                <label class="form-label">
                    Agent
                </label>

                <select class="form-select">

                    <option selected>
                        All Agents
                    </option>

                    <option>
                        Ali Khan
                    </option>

                    <option>
                        Ahmed Raza
                    </option>

                    <option>
                        Usman Ali
                    </option>

                </select>

            </div>


            <!-- Date -->
            <div class="col-md-2">

                <label class="form-label">
                    Date
                </label>

                <input
                    type="date"
                    class="form-control">

            </div>


            <!-- Filter -->
            <div class="col-md-2 d-flex align-items-end">

                <button class="btn btn-dark w-100">

                    <i class="bi bi-funnel me-1"></i>

                    Filter

                </button>

            </div>

        </div>

    </div>

</div>


<!-- Shipments Table -->
<div class="card dashboard-card">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>

                <h5 class="mb-1">
                    Shipment List
                </h5>

                <small class="text-muted">
                    All courier shipments
                </small>

            </div>

            <span class="badge bg-secondary">
                350 Shipments
            </span>

        </div>


        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>#</th>

                        <th>Tracking No.</th>

                        <th>Sender</th>

                        <th>Receiver</th>

                        <th>Destination</th>

                        <th>Agent</th>

                        <th>Status</th>

                        <th>Date</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                    <!-- Shipment 1 -->

                    <tr>

                        <td>
                            1
                        </td>

                        <td>

                            <strong>
                                CR-10001
                            </strong>

                            <br>

                            <small class="text-muted">
                                Express
                            </small>

                        </td>

                        <td>
                            Ali Khan
                        </td>

                        <td>
                            Sara Ahmed
                        </td>

                        <td>
                            Lahore
                        </td>

                        <td>
                            Ali Khan
                        </td>

                        <td>

                            <span class="badge bg-warning text-dark">
                                In Transit
                            </span>

                        </td>

                        <td>
                            29 Aug 2026
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

                                            <i class="bi bi-pencil me-2"></i>

                                            Edit

                                        </a>

                                    </li>

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-arrow-repeat me-2"></i>

                                            Update Status

                                        </a>

                                    </li>

                                    <li>

                                        <hr class="dropdown-divider">

                                    </li>

                                    <li>

                                        <a
                                            class="dropdown-item text-danger"
                                            href="#">

                                            <i class="bi bi-trash me-2"></i>

                                            Delete

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Shipment 2 -->

                    <tr>

                        <td>
                            2
                        </td>

                        <td>

                            <strong>
                                CR-10002
                            </strong>

                            <br>

                            <small class="text-muted">
                                Standard
                            </small>

                        </td>

                        <td>
                            Ahmed Raza
                        </td>

                        <td>
                            Hina Ali
                        </td>

                        <td>
                            Islamabad
                        </td>

                        <td>
                            Ahmed Raza
                        </td>

                        <td>

                            <span class="badge bg-success">
                                Delivered
                            </span>

                        </td>

                        <td>
                            28 Aug 2026
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

                                            <i class="bi bi-pencil me-2"></i>

                                            Edit

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Shipment 3 -->

                    <tr>

                        <td>
                            3
                        </td>

                        <td>

                            <strong>
                                CR-10003
                            </strong>

                            <br>

                            <small class="text-muted">
                                Same Day
                            </small>

                        </td>

                        <td>
                            Usman Ali
                        </td>

                        <td>
                            Ayesha Noor
                        </td>

                        <td>
                            Karachi
                        </td>

                        <td>
                            Usman Ali
                        </td>

                        <td>

                            <span class="badge bg-secondary">
                                Pending
                            </span>

                        </td>

                        <td>
                            29 Aug 2026
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

                                            <i class="bi bi-pencil me-2"></i>

                                            Edit

                                        </a>

                                    </li>

                                    <li>

                                        <a
                                            class="dropdown-item"
                                            href="#">

                                            <i class="bi bi-arrow-repeat me-2"></i>

                                            Update Status

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- Shipment 4 -->

                    <tr>

                        <td>
                            4
                        </td>

                        <td>

                            <strong>
                                CR-10004
                            </strong>

                            <br>

                            <small class="text-muted">
                                Express
                            </small>

                        </td>

                        <td>
                            Hassan Ali
                        </td>

                        <td>
                            Maria Noor
                        </td>

                        <td>
                            Multan
                        </td>

                        <td>
                            Ali Khan
                        </td>

                        <td>

                            <span class="badge bg-danger">
                                Cancelled
                            </span>

                        </td>

                        <td>
                            27 Aug 2026
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
                Showing 1 to 4 of 350 shipments
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