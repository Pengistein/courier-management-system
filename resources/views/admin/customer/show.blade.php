@extends('admin.app')

@section('title', 'Customer Details')

@section('content')


<!-- Header -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="page-title mb-1">
            Customer Details
        </h2>

        <p class="text-muted mb-0">
            View customer information and shipment history
        </p>

    </div>


    <a href="#" class="btn btn-outline-secondary">

        <i class="bi bi-arrow-left me-1"></i>

        Back

    </a>

</div>


<!-- Customer Profile -->

<div class="card dashboard-card mb-4">

    <div class="card-body">

        <div class="row align-items-center">


            <!-- Profile -->

            <div class="col-md-7">

                <div class="d-flex align-items-center">

                    <div
                        class="admin-avatar me-3"
                        style="width:65px; height:65px; font-size:22px;">

                        AK

                    </div>


                    <div>

                        <h4 class="mb-1">
                            Ali Khan
                        </h4>

                        <p class="text-muted mb-1">
                            Customer ID: CU-001
                        </p>

                        <span class="badge bg-success">
                            Active
                        </span>

                    </div>

                </div>

            </div>


            <!-- Actions -->

            <div class="col-md-5 text-md-end mt-3 mt-md-0">

                <button class="btn btn-outline-primary me-2">

                    <i class="bi bi-telephone me-1"></i>

                    Call

                </button>


                <button class="btn btn-primary">

                    <i class="bi bi-envelope me-1"></i>

                    Email

                </button>

            </div>

        </div>

    </div>

</div>


<div class="row g-4">


    <!-- Contact Information -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-person-lines-fill me-2"></i>

                    Contact Information

                </h5>

                <hr>


                <div class="mb-3">

                    <small class="text-muted">
                        Phone Number
                    </small>

                    <p class="mb-0 fw-semibold">
                        03001234567
                    </p>

                </div>


                <div class="mb-3">

                    <small class="text-muted">
                        Email Address
                    </small>

                    <p class="mb-0 fw-semibold">
                        ali@gmail.com
                    </p>

                </div>


                <div>

                    <small class="text-muted">
                        Address
                    </small>

                    <p class="mb-0 fw-semibold">
                        Gulshan-e-Iqbal, Karachi, Pakistan
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- Customer Statistics -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-bar-chart me-2"></i>

                    Customer Statistics

                </h5>

                <hr>


                <div class="row text-center">


                    <div class="col-4">

                        <h3 class="text-primary">
                            18
                        </h3>

                        <small class="text-muted">
                            Total
                        </small>

                    </div>


                    <div class="col-4">

                        <h3 class="text-warning">
                            3
                        </h3>

                        <small class="text-muted">
                            In Progress
                        </small>

                    </div>


                    <div class="col-4">

                        <h3 class="text-success">
                            15
                        </h3>

                        <small class="text-muted">
                            Delivered
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Shipment History -->

    <div class="col-12">

        <div class="card dashboard-card">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-3">

                    <div>

                        <h5 class="mb-1">
                            Shipment History
                        </h5>

                        <small class="text-muted">
                            Customer's previous shipments
                        </small>

                    </div>

                    <button class="btn btn-sm btn-outline-primary">
                        View All
                    </button>

                </div>


                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>
                                    Tracking No.
                                </th>

                                <th>
                                    Destination
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                    Amount
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <tr>

                                <td>
                                    <strong>
                                        CR-10001
                                    </strong>
                                </td>

                                <td>
                                    Lahore
                                </td>

                                <td>
                                    29 Aug 2026
                                </td>

                                <td>
                                    Rs. 500
                                </td>

                                <td>

                                    <span class="badge bg-warning text-dark">
                                        In Progress
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>
                                        CR-09982
                                    </strong>
                                </td>

                                <td>
                                    Islamabad
                                </td>

                                <td>
                                    25 Aug 2026
                                </td>

                                <td>
                                    Rs. 700
                                </td>

                                <td>

                                    <span class="badge bg-success">
                                        Delivered
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>
                                        CR-09951
                                    </strong>
                                </td>

                                <td>
                                    Hyderabad
                                </td>

                                <td>
                                    20 Aug 2026
                                </td>

                                <td>
                                    Rs. 450
                                </td>

                                <td>

                                    <span class="badge bg-success">
                                        Delivered
                                    </span>

                                </td>

                                <td>

                                    <a
                                        href="#"
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection