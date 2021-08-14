@extends('layouts.master')
@section('styles')
@endsection

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Active Jobs</h5>
                    <p class="m-b-0">List of all Active Jobs</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Jobs</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Title</th>
                                        <th>Area</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th width="150" class="text-center">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var dataTable = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            pageLength: 5,
            // scrollX: true,
            "order": [[ 0, "desc" ]],
            ajax: '{{ route("active-job") }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'company_name', name: 'company_name'},
                {data: 'email', name: 'email'},
                {data: 'job_title', name: 'job_title'},
                {data: 'job_area', name: 'job_area'},
                {data: 'job_type', name: 'job_type'},
                {data: 'status', name: 'status',render: function ( data, type, row, meta ) {
                        if(row.status == 0)
                            return '<span class="badge rounded-pill bg-danger">Pending</span>';
                        else
                            return '<span class="badge rounded-pill bg-success">Active</span>';
                    }
                },
                {data: 'Actions', name: 'Actions',orderable:false,serachable:false,sClass:'text-center',
                render: function ( data, type, row, meta ) {
                     var html = "";
                        return '<a type="button" class="btn btn-primary btn-sm" id="getEditArticleData" href="/job-view/'+row.id+'" data-id="'+row.id+'">View</a>' ;
                    }
                },
            ]
        });
    });
</script>
@endsection