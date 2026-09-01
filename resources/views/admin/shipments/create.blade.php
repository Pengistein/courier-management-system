@extends('admin.app')

@section('title', 'Create Shipment')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="page-title mb-1">
            Create Shipment
        </h2>
        <p class="text-muted mb-0">
            Create a new courier shipment
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
                <i class="bi bi-box-seam me-2"></i>
                Shipment Information
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
                        value="CR-10005"
                        readonly>

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Shipment Type
                    </label>

                    <select class="form-select">

                        <option selected>
                            Select Type
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
                        Pickup Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Enter pickup address"></textarea>

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


                <div class="col-12">

                    <label class="form-label">
                        Delivery Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Enter delivery address"></textarea>

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

                    </select>

                </div>

            </div>


            <!-- Package -->

            <h5 class="mb-3">

                <i class="bi bi-box me-2"></i>

                Package Information

            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-4">

                    <label class="form-label">
                        Package Weight (KG)
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        placeholder="e.g. 2">

                </div>


                <div class="col-md-4">

                    <label class="form-label">
                        Package Type
                    </label>

                    <select class="form-select">

                        <option selected>
                            Select Package
                        </option>

                        <option>
                            Document
                        </option>

                        <option>
                            Parcel
                        </option>

                        <option>
                            Electronics
                        </option>

                        <option>
                            Other
                        </option>

                    </select>

                </div>


                <div class="col-md-4">

                    <label class="form-label">
                        Shipping Charges
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        placeholder="Rs.">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Package Description
                    </label>

                    <textarea
                        class="form-control"
                        rows="3"
                        placeholder="Describe package"></textarea>

                </div>

            </div>


            <!-- Agent -->

            <h5 class="mb-3">

                <i class="bi bi-person-badge me-2"></i>

                Assign Agent

            </h5>

            <hr>


            <div class="row g-3 mb-4">

                <div class="col-md-6">

                    <label class="form-label">
                        Delivery Agent
                    </label>

                    <select class="form-select">

                        <option selected>
                            Select Agent
                        </option>

                        <option>
                            Ali Khan
                        </option>

                        <option>
                            Ahmed Raza
                        </option>

                        <option>
                            Usman Ali
                        </option>

                    </select>

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Expected Delivery Date
                    </label>

                    <input
                        type="date"
                        class="form-control">

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

                    <i class="bi bi-plus-lg me-1"></i>

                    Create Shipment

                </button>

            </div>

        </form>

    </div>

</div>

@endsection