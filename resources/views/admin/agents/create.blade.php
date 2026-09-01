@extends('admin.app')

@section('title', 'Add New Agent')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="page-title mb-1">
            Add New Agent
        </h2>

        <p class="text-muted mb-0">
            Create a new courier delivery agent
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


            <!-- Personal Information -->

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
                        placeholder="Enter agent name">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        placeholder="03XXXXXXXXX">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        placeholder="agent@example.com">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        CNIC
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="XXXXX-XXXXXXX-X">

                </div>

            </div>


            <!-- Address -->

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
                            Select City
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

                        <option>
                            Multan
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
                        placeholder="Enter area">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Complete Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Enter complete address"></textarea>

                </div>

            </div>


            <!-- Login Information -->

            <h5 class="mb-3">

                <i class="bi bi-shield-lock me-2"></i>

                Login Information

            </h5>

            <hr>


            <div class="row g-3 mb-4">


                <div class="col-md-6">

                    <label class="form-label">
                        Username
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter username">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        class="form-control"
                        placeholder="Enter password">

                </div>

            </div>


            <!-- Status -->

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


            <!-- Buttons -->

            <div class="border-top pt-4">

                <button
                    type="reset"
                    class="btn btn-outline-secondary me-2">

                    Clear

                </button>


                <button
                    type="submit"
                    class="btn btn-primary">

                    <i class="bi bi-person-plus me-1"></i>

                    Create Agent

                </button>

            </div>


        </form>

    </div>

</div>

@endsection