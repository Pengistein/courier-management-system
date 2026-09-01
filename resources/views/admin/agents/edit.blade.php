@extends('admin.app')

@section('title', 'Edit Agent')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="page-title mb-1">
            Edit Agent
        </h2>

        <p class="text-muted mb-0">
            Update agent information
        </p>

    </div>


    <a href="#" class="btn btn-outline-secondary">

        <i class="bi bi-arrow-left me-1"></i>

        Back

    </a>

</div>


<div class="card dashboard-card">

    <div class="card-body p-4">

        <form>


            <h5 class="mb-3">

                <i class="bi bi-person me-2"></i>

                Personal Information

            </h5>

            <hr>


            <div class="row g-3 mb-4">


                <div class="col-md-6">

                    <label class="form-label">
                        Full Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Ali Khan">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        value="03001234567">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        value="ali@gmail.com">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        CNIC
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="42101-1234567-1">

                </div>

            </div>


            <h5 class="mb-3">

                <i class="bi bi-geo-alt me-2"></i>

                Address Information

            </h5>

            <hr>


            <div class="row g-3 mb-4">


                <div class="col-md-6">

                    <label class="form-label">
                        City
                    </label>

                    <select class="form-select">

                        <option selected>
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

                    </select>

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Area
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Gulshan-e-Iqbal">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Complete Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3">Gulshan-e-Iqbal, Karachi</textarea>

                </div>

            </div>


            <h5 class="mb-3">

                <i class="bi bi-toggle-on me-2"></i>

                Account Status

            </h5>

            <hr>


            <div class="mb-4">

                <select class="form-select">

                    <option selected>
                        Active
                    </option>

                    <option>
                        Inactive
                    </option>

                </select>

            </div>


            <div class="border-top pt-4">

                <button
                    type="button"
                    class="btn btn-outline-secondary me-2">

                    Cancel

                </button>


                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-check-lg me-1"></i>

                    Update Agent

                </button>

            </div>


        </form>

    </div>

</div>

@endsection