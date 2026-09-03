@extends('admin.app')
@section('title', 'Create A Branch')
@section('content')

<div class="page-title">
    Create A Branch
</div>

<div class="container d-flex justify-content-center align-items-center">
    <div class="card dashboard-card w-100">
        <div class="card-body text-center">
            <h1 class="mb-4">
                Branch Details
            </h1>
            <div class="row">
                <div class="offset-3 col-md-6 mb-3">
                    <form action="{{ route('admin.branches.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-start mt-2">
                            <label for="name" class="mb-1 form-label fw-bold">Branch Name</label>
                            <input class="form-control" placeholder="Branch Name" name="name" />
                        </div>
                        <div class="text-start mt-2">
                            <label for="address" class="mb-1 form-label fw-bold">Branch Address</label>
                            <input class="form-control" placeholder="Branch Address" name="address" />
                        </div>
                        <div class="text-start mt-2">
                            <label for="manager_id" class="form-label mb-1 fw-bold">Choose a Manager</label>
                            <select class="form-select" id="manager" name="manager_id" aria-label="Default select example">
                                <option selected disabled>Choose a manager</option>
                                <option value="1">Option One</option>
                                <option value="2">Option Two</option>
                                <option value="3">Option Three</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-start mt-2">
                                    <label for="latitude" class="form-label mb-1 fw-bold">Choose a Latitude</label>
                                    <input class="form-control" type="decimal" placeholder="Latitude" name="latitude" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-start mt-2">
                                    <label for="longitude" class="form-label mb-1 fw-bold">Choose a Longitude</label>
                                    <input class="form-control" type="decimal" placeholder="Longitude" name="longitude" />
                                </div>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <label for="timing" class="form-label mb-1 fw-bold">Choose a Timing</label>
                            <input class="form-control" type="text" placeholder="Timing" name="timing" />
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary w-100 p-3">Create Branch</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection