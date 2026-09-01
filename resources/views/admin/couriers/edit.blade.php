@extends('admin.app')

@section('title', 'Edit Courier')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="page-title mb-1">
            Edit Courier
        </h2>

        <p class="text-muted mb-0">
            Update courier information
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
                        value="CR-10001">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Courier Type
                    </label>

                    <select class="form-select">

                        <option>Standard</option>

                        <option selected>
                            Express
                        </option>

                        <option>
                            Same Day
                        </option>

                    </select>

                </div>

            </div>


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
                        value="Ali Khan">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Sender Phone
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        value="03001234567">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Sender Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3">Karachi, Pakistan</textarea>

                </div>

            </div>


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
                        value="Sara Ahmed">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Receiver Phone
                    </label>

                    <input
                        type="tel"
                        class="form-control"
                        value="03111234567">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Destination City
                    </label>

                    <select class="form-select">

                        <option>Karachi</option>

                        <option selected>
                            Lahore
                        </option>

                        <option>Islamabad</option>

                        <option>Rawalpindi</option>

                    </select>

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option>
                            Pending
                        </option>

                        <option selected>
                            In Progress
                        </option>

                        <option>
                            Delivered
                        </option>

                        <option>
                            Cancelled
                        </option>

                    </select>

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Receiver Address
                    </label>

                    <textarea
                        class="form-control"
                        rows="3">Lahore, Pakistan</textarea>

                </div>

            </div>


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
                        value="2">

                </div>


                <div class="col-md-6">

                    <label class="form-label">
                        Shipping Charges
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        value="500">

                </div>

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

                    Update Courier

                </button>

            </div>

        </form>

    </div>

</div>

@endsection