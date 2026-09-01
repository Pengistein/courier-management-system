@extends('admin.app')

@section('title', 'Admin Dashboard')

@section('content')

    <div class="page-title">
        Dashboard
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="card dashboard-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">
                                Total Courier
                            </div>
                            <div class="card-number">
                                0
                            </div>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="card dashboard-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">
                                In Progress
                            </div>
                            <div class="card-number">
                                0
                            </div>
                        </div>
                        <div class="card-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card dashboard-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-title">
                                Delivered
                            </div>
                            <div class="card-number">
                                0
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

    <div class="card dashboard-card mt-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">
                    Recent Shipments
                </h5>
                <button class="btn btn-primary btn-sm">
                    View All
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Tracking No.</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No shipments available
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection