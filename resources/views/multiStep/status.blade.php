<div class="container py-5">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <h2>Application Status</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S No</th>
                            <th>Application Number</th>
                            <th>Progress</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>8347632548</td>
                            <td>
                                {{ ($user_detail->step == 1 ? 'Basic Details' : $user_detail->step == 2) ? 'Educational Details' : 'Completed' }}
                            </td>
                            <td>
                                <span class="badge bg-danger">Pending</span>
                            </td>
                            <td>
                                <a href="">View Application</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
