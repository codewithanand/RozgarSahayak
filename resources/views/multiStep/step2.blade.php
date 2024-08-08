<div class="container py-5">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <h2>Educational Details</h2>
            <hr>
            <form action="{{ url('/user/register/step2') }}" method="post" class="mt-3" id="step2_form">
                @csrf
                <div class="row">
                    <h5 class="text-secondary mt-3">Class X</h5>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="School Name"
                                name="matric_school_name" value="{{ $user_detail->matric_school_name }}">
                            <label for="">School Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Passing Year"
                                name="matric_passing_year" value="{{ $user_detail->matric_passing_year }}">
                            <label for="">Passing Year</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Board" name="matric_board_name"
                                value="{{ $user_detail->matric_board_name }}">
                            <label for="">Board</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Percentage" name="matric_percentage"
                                value="{{ $user_detail->matric_percentage }}">
                            <label for="">Percentage</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <h5 class="text-secondary">Class XII</h5>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="School Name"
                                name="inter_school_name" value="{{ $user_detail->inter_school_name }}">
                            <label for="">School Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Passing Year"
                                name="inter_passing_year" value="{{ $user_detail->inter_passing_year }}">
                            <label for="">Passing Year</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Board" name="inter_board_name"
                                value="{{ $user_detail->inter_board_name }}">
                            <label for="">Board</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" placeholder="Percentage" name="inter_percentage"
                                value="{{ $user_detail->inter_percentage }}">
                            <label for="">Percentage</label>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="d-flex justify-content-end align-items-center gap-3">
                    @if ($user_detail->matric_school_name)
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Next
                        </button>
                    @endif
                    <button class="btn btn-success" type="submit">Save</button>
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
                <a href="{{ url('/user/register/step2/confirm/' . $user_detail->id) }}"
                    class="btn btn-light">Confirm</a>
            </div>
        </div>
    </div>
</div>
