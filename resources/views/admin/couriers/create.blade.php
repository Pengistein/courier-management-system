@extends('admin.app')

@section('title', 'Add New Courier')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Add New Courier
        </h2>

        <p class="text-muted mb-0">
            Enter courier and shipment information
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


            <!-- Courier Information -->

            <h5 class="mb-3">
                <i class="bi bi-box-seam me-2"></i>
                Courier Information
            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-6">

                    <label class="form-label">
                        Tracking Number
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="e.g. CR-10004">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Courier Type
                    </label>

                    <select class="form-select">

                        <option selected>
                            Select Courier Type
                        </option>

                        <option>
                            Standard
                        </option>

                        <option>
                            Express
                        </option>

                        <option>
                            Same Day
                        </option>

                    </select>

                </div>

            </div>


            <!-- Sender -->

            <h5 class="mb-3">
                <i class="bi bi-person me-2"></i>
                Sender Information
            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-6">

                    <label class="form-label">
                        Sender Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter sender name">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Sender Phone
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        placeholder="03XXXXXXXXX">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Sender Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Enter sender address"></textarea>

                </div>

            </div>


            <!-- Receiver -->

            <h5 class="mb-3">
                <i class="bi bi-person-check me-2"></i>
                Receiver Information
            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-6">

                    <label class="form-label">
                        Receiver Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter receiver name">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Receiver Phone
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        placeholder="03XXXXXXXXX">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Destination City
                    </label>

                    <select class="form-select">

                        <option selected>
                            Select City
                        </option>

                        <option>Karachi</option>
                        <option>Lahore</option>
                        <option>Islamabad</option>
                        <option>Rawalpindi</option>
                        <option>Hyderabad</option>
                        <option>Multan</option>
                        <option>Faisalabad</option>

                    </select>

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Delivery Date
                    </label>

                    <input
                        type="date"
                        class="form-control">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Receiver Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Enter receiver address"></textarea>

                </div>

            </div>


            <!-- Payment -->

            <h5 class="mb-3">
                <i class="bi bi-cash-stack me-2"></i>
                Payment Information
            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-6">

                    <label class="form-label">
                        Weight (KG)
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        placeholder="e.g. 2">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Shipping Charges
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        placeholder="Enter charges">

                </div>

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

                    <i class="bi bi-check-lg me-1"></i>

                    Create Courier

                </button>

            </div>

        </form>

    </div>

</div>

@endsection
