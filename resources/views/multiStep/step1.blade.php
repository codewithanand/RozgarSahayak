<div class="container py-5">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <h2>Basic Details</h2>
            <hr>
            <form action="{{ url('/user/register/step1') }}" method="post" class="mt-3" id="step1_form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Full Name" name="name"
                                value="{{ $user_detail->name }}">
                            <label for="">Full Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="date" class="form-control" placeholder="Date Of Birth" name="date_of_birth"
                                value="{{ $user_detail->date_of_birth }}">
                            <label for="">Date Of Birth</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Address" name="address"
                                value="{{ $user_detail->address }}">
                            <label for="">Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="State" name="state_id"
                                value="{{ $user_detail->state_id }}">
                            <label for="">State</label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="District" name="district_id"
                                value="{{ $user_detail->district_id }}">
                            <label for="">District</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Pincode" name="pincode"
                                value="{{ $user_detail->pincode }}">
                            <label for="">Pincode</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Caste" name="caste"
                                value="{{ $user_detail->caste }}">
                            <label for="">Caste</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Religion" name="religion"
                                value="{{ $user_detail->religion }}">
                            <label for="">Religion</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end align-items-center gap-3">
                    @if ($user_detail->name)
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Next
                        </button>
                    @endif
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Confirm Submission</h1>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
                The changes cannot be undone once you submit the form. Are you sure want to submit this form?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <a href="{{ url('/user/register/step1/confirm/' . $user_detail->id) }}"
                    class="btn btn-light">Confirm</a>
            </div>
        </div>
    </div>
</div>
