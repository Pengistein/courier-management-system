@extends('admin.app')
@section('title', 'Branches')
@section('content')

@php
    $branchesCount = DB::table('branch')->count();
    $cityCount = DB::table('branch')->distinct('city')->count('city');
@endphp

<div class="page-title">
  Branches
</div>
<div class="row g-4">
  <div class="col-lg-6 col-md-6">
    <div class="card dashboard-card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="card-title">
              Total Branches
            </div>
            <div class="card-number">
              {{ $branchesCount }}
            </div>
          </div>
          <div class="card-icon">
            <i class="bi bi-building"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6">
    <div class="card dashboard-card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="card-title">
              Cities Covered
            </div>
            <div class="card-number">
              {{ $cityCount }}
            </div>
          </div>
          <div class="card-icon">
            <i class="bi bi-map"></i>
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
        Branch Locations
      </h5>
      <div>
        <a class="btn btn-primary btn-md" href="{{ route('admin.branches.create') }}">
          Add Branch
        </a>
        <a class="btn btn-outline-primary btn-md" href="{{ route('admin.branches.branches') }}">
          View All
        </a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>Branch Name</th>
            <th>Address</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Status</th>
            <th>Timing</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="7" class="text-center text-muted py-4">
              No branches available
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection