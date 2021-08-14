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
                    <h5 class="m-b-10">Contact Us</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Contact Us</a>
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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5>Contact us Detail</h5>
                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{route('contact-us.store')}}" class="form-material">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id ?? ""}}">
                            <div class="form-group form-default">
                                <input type="email" value="{{$data->email ?? ""}}" name="email" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Email</label>
                            </div>
                            <div class="form-group form-default">
                                <input type="number" value="{{$data->contact ?? ""}}" min="0" name="contact" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Contact Number</label>
                            </div>
                            <div class="form-group form-default">
                                <textarea name="address" class="form-control" required="">{{$data->address ?? ""}}</textarea>
                                <span class="form-bar"></span>
                                <label class="float-label">Enter Address</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md waves-effect waves-light text-center m-b-20">Submit</button>
                        </form>
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
            ajax: '{{ route("user.show",1) }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'address', name: 'address'},
                {data: 'email', name: 'email'},
                {data: 'mobile_number', name: 'mobile_number'},
                {data: 'created_at', name: 'created_at'},
            ]
        });
    });
</script>
@endsection