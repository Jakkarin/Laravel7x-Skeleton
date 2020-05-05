@extends('layouts.backend')

@section('css')
<link href="{{ asset('static/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Role Management</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50 mr-1"></i> Create Role</a>
</div>

<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information
    about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables
        documentation</a>.</p>

<!-- DataTales -->
<div class="card shadow mb-4">
    {{-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div> --}}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!-- End of DataTales -->

@endsection

@section('js')
<!-- Page level plugins -->
<script src="{{ asset('static/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('static/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>
@endsection