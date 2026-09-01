@extends('admin.app')

@section('title', 'Manage Agents')

@section('content')

<!-- Page Header -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Manage Agents
        </h2>

        <p class="text-muted mb-0">
            Create and manage courier delivery agents
        </p>
    </div>

    <!-- Abhi # hai, baad mein route lagega -->
    <a href="#" class="btn btn-primary">

        <i class="bi bi-person-plus me-1"></i>

        Add New Agent

    </a>

</div>


<!-- Search -->
<div class="card dashboard-card mb-4">

    <div class="card-body">

        <div class="row g-3">

            <div class="col-md-6">

                <label class="form-label">
                    Search Agent
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search by name, email or city">

                </div>

            </div>


            <div class="col-md-3">

                <label class="form-label">
                    Status
                </label>

                <select class="form-select">

                    <option selected>
                        All Status
                    </option>

                    <option>
                        Active
                    </option>

                    <option>
                        Inactive
                    </option>

                </select>

            </div>


            <div class="col-md-3 d-flex align-items-end">

                <button class="btn btn-dark w-100">

                    <i class="bi bi-search me-1"></i>

                    Search

                </button>

            </div>

        </div>

    </div>

</div>


<!-- Agents Table -->
<div class="card dashboard-card">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h5 class="mb-0">
                Agents List
            </h5>

            <span class="badge bg-secondary">
                3 Agents
            </span>

        </div>


        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>#</th>

                        <th>Agent</th>

                        <th>Contact</th>

                        <th>City</th>

                        <th>Assigned Shipments</th>

                        <th>Status</th>

                        <th>Action</th>

                    </tr>

                </thead>


                <tbody>


                    <!-- Agent 1 -->

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
                                        Agent ID: AG-001
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
                                12
                            </span>
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

                                            View

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


                    <!-- Agent 2 -->

                    <tr>

                        <td>
                            2
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    AR
                                </div>

                                <div>

                                    <strong>
                                        Ahmed Raza
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Agent ID: AG-002
                                    </small>

                                </div>

                            </div>

                        </td>

                        <td>

                            03211234567

                            <br>

                            <small class="text-muted">
                                ahmed@gmail.com
                            </small>

                        </td>

                        <td>
                            Lahore
                        </td>

                        <td>
                            <span class="badge bg-info text-dark">
                                8
                            </span>
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

                                            View

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


                    <!-- Agent 3 -->

                    <tr>

                        <td>
                            3
                        </td>

                        <td>

                            <div class="d-flex align-items-center">

                                <div class="admin-avatar me-2">
                                    UA
                                </div>

                                <div>

                                    <strong>
                                        Usman Ali
                                    </strong>

                                    <br>

                                    <small class="text-muted">
                                        Agent ID: AG-003
                                    </small>

                                </div>

                            </div>

                        </td>

                        <td>

                            03451234567

                            <br>

                            <small class="text-muted">
                                usman@gmail.com
                            </small>

                        </td>

                        <td>
                            Islamabad
                        </td>

                        <td>

                            <span class="badge bg-info text-dark">
                                5
                            </span>

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

                                            View

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

                </tbody>

            </table>

        </div>


        <!-- Pagination -->

        <div class="d-flex justify-content-end">

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
                            Next
                        </a>

                    </li>

                </ul>

            </nav>

        </div>

    </div>

</div>

@endsection