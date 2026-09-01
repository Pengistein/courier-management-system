@extends('admin.app')

@section('title', 'All Couriers')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="page-title mb-1">All Couriers</h2>
        <p class="text-muted mb-0">
            Manage all courier shipments
        </p>
    </div>
    <a href="#" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i>
        Add New Courier
    </a>
</div>

<div class="card dashboard-card mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-5">
                <label class="form-label">Search Courier</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Tracking number, sender or receiver">
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">Status</label>
                <select class="form-select">
                    <option selected>All Status</option>
                    <option>Pending</option>
                    <option>In Progress</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-dark w-100">
                    <i class="bi bi-funnel me-1"></i>
                    Filter
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card dashboard-card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Courier List</h5>
            <span class="badge bg-secondary">0 Couriers</span>
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
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> <strong>CR-10001</strong></td>
                        <td>Ali Khan<br><small class="text-muted">03001234567</small></td>
                        <td>Sara Ahmed<br><small class="text-muted">03111234567</small></td>
                        <td>Karachi</td>
                        <td><span class="badge bg-warning text-dark">In Progress</span></td>
                        <td>29 Aug 2026</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">
                                            <i class="bi bi-eye me-2"></i>
                                            View
                                        </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil me-2"></i>
                                            Edit
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="#">
                                            <i class="bi bi-trash me-2"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>CR-10002</strong></td>
                        <td>Ahmed Raza<br><small class="text-muted">03211234567</small></td>
                        <td>Hina Ali<br><small class="text-muted">03331234567</small></td>
                        <td>Lahore</td>
                        <td><span class="badge bg-success">Delivered</span></td>
                        <td>28 Aug 2026</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-eye me-2"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil me-2"></i>
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="#">
                                            <i class="bi bi-trash me-2"></i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>CR-10003</strong></td>
                        <td>Usman Ali<br><small class="text-muted">03451234567</small></td>
                        <td>Ayesha Noor<br><small class="text-muted">03011234567</small></td>
                        <td>Islamabad</td>
                        <td><span class="badge bg-secondary">Pendin></span></td>
                        <td>29 Aug 2026</td>
                        <td><div class="dropdown">
                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-eye me-2"></i>
                                            View
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil me-2"></i>
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="#">
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

        <div class="d-flex justify-content-end mt-3">
            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            Previous
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection
