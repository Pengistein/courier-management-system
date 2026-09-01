@extends('admin.app')

@section('title', 'Shipment Details')

@section('content')


<!-- Header -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="page-title mb-1">
            Shipment Details
        </h2>

        <p class="text-muted mb-0">
            View complete shipment information
        </p>

    </div>


    <div>

        <button class="btn btn-outline-dark me-2">

            <i class="bi bi-printer me-1"></i>

            Print

        </button>


        <a href="#" class="btn btn-primary">

            <i class="bi bi-pencil me-1"></i>

            Edit

        </a>

    </div>

</div>


<!-- Tracking Header -->

<div class="card dashboard-card mb-4">

    <div class="card-body">

        <div class="row align-items-center">

            <div class="col-md-6">

                <small class="text-muted">
                    Tracking Number
                </small>

                <h3 class="mb-1">
                    CR-10001
                </h3>

                <small class="text-muted">
                    Express Shipment
                </small>

            </div>


            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                <span class="badge bg-warning text-dark fs-6">
                    In Transit
                </span>

            </div>

        </div>

    </div>

</div>


<div class="row g-4">


    <!-- Sender -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-person me-2"></i>

                    Sender

                </h5>

                <hr>


                <p>

                    <strong>
                        Name:
                    </strong>

                    Ali Khan

                </p>


                <p>

                    <strong>
                        Phone:
                    </strong>

                    03001234567

                </p>


                <p class="mb-0">

                    <strong>
                        Address:
                    </strong>

                    Gulshan-e-Iqbal, Karachi

                </p>

            </div>

        </div>

    </div>


    <!-- Receiver -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-person-check me-2"></i>

                    Receiver

                </h5>

                <hr>


                <p>

                    <strong>
                        Name:
                    </strong>

                    Sara Ahmed

                </p>


                <p>

                    <strong>
                        Phone:
                    </strong>

                    03111234567

                </p>


                <p class="mb-0">

                    <strong>
                        Address:
                    </strong>

                    Johar Town, Lahore

                </p>

            </div>

        </div>

    </div>


    <!-- Package -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-box me-2"></i>

                    Package Information

                </h5>

                <hr>


                <div class="row">

                    <div class="col-6">

                        <small class="text-muted">
                            Weight
                        </small>

                        <p class="fw-bold">
                            2 KG
                        </p>

                    </div>


                    <div class="col-6">

                        <small class="text-muted">
                            Type
                        </small>

                        <p class="fw-bold">
                            Parcel
                        </p>

                    </div>


                    <div class="col-6">

                        <small class="text-muted">
                            Charges
                        </small>

                        <p class="fw-bold">
                            Rs. 500
                        </p>

                    </div>


                    <div class="col-6">

                        <small class="text-muted">
                            Destination
                        </small>

                        <p class="fw-bold">
                            Lahore
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Agent -->

    <div class="col-md-6">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <h5 class="mb-3">

                    <i class="bi bi-person-badge me-2"></i>

                    Assigned Agent

                </h5>

                <hr>


                <div class="d-flex align-items-center">

                    <div class="admin-avatar me-3">
                        AK
                    </div>


                    <div>

                        <h6 class="mb-1">
                            Ali Khan
                        </h6>

                        <small class="text-muted">
                            Agent ID: AG-001
                        </small>

                        <br>

                        <small class="text-muted">
                            03001234567
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Shipment Timeline -->

    <div class="col-12">

        <div class="card dashboard-card">

            <div class="card-body">

                <h5 class="mb-4">

                    <i class="bi bi-clock-history me-2"></i>

                    Shipment Tracking

                </h5>


                <!-- Timeline -->

                <div class="mb-4">

                    <div class="d-flex mb-4">

                        <div class="me-3">

                            <span class="badge bg-success rounded-circle p-2">

                                <i class="bi bi-check"></i>

                            </span>

                        </div>

                        <div>

                            <strong>
                                Shipment Created
                            </strong>

                            <br>

                            <small class="text-muted">
                                29 Aug 2026 - 09:00 AM
                            </small>

                        </div>

                    </div>


                    <div class="d-flex mb-4">

                        <div class="me-3">

                            <span class="badge bg-success rounded-circle p-2">

                                <i class="bi bi-check"></i>

                            </span>

                        </div>

                        <div>

                            <strong>
                                Picked Up
                            </strong>

                            <br>

                            <small class="text-muted">
                                29 Aug 2026 - 11:30 AM
                            </small>

                        </div>

                    </div>


                    <div class="d-flex mb-4">

                        <div class="me-3">

                            <span class="badge bg-warning text-dark rounded-circle p-2">

                                <i class="bi bi-truck"></i>

                            </span>

                        </div>

                        <div>

                            <strong>
                                In Transit
                            </strong>

                            <br>

                            <small class="text-muted">
                                29 Aug 2026 - 03:00 PM
                            </small>

                        </div>

                    </div>


                    <div class="d-flex">

                        <div class="me-3">

                            <span class="badge bg-secondary rounded-circle p-2">

                                <i class="bi bi-house"></i>

                            </span>

                        </div>

                        <div>

                            <strong>
                                Delivered
                            </strong>

                            <br>

                            <small class="text-muted">
                                Pending
                            </small>

                        </div>

                    </div>

                </div>


                <!-- Update Status -->

                <div class="border-top pt-4">

                    <h6 class="mb-3">
                        Update Shipment Status
                    </h6>


                    <div class="row g-3">

                        <div class="col-md-4">

                            <select class="form-select">

                                <option selected>
                                    In Transit
                                </option>

                                <option>
                                    Pending
                                </option>

                                <option>
                                    Picked Up
                                </option>

                                <option>
                                    Delivered
                                </option>

                                <option>
                                    Cancelled
                                </option>

                            </select>

                        </div>


                        <div class="col-md-6">

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Add tracking note">

                        </div>


                        <div class="col-md-2">

                            <button class="btn btn-primary w-100">

                                Update

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection