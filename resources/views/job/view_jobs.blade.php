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
                    <h5 class="m-b-10">View Job</h5>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">View Job</a>
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
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Company Name : {{$job->company_name}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Address : {{$job->address}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email : {{$job->email }}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Title : {{$job->job_title}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Skill : {{$job->job_skill}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Area : {{$job->job_area}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Type : {{$job->job_type}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Worf From Home : 
                                    @if ($job->wfh == 0)
                                        No
                                    @else
                                        Yes
                                    @endif 
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Status : @if ($job->status == 0)
                                    Pending
                                @else
                                    Active
                                @endif</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Experience : {{$job->experience}}</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">Salary : {{$job->salary}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                    <label for="">Description : {!! $job->job_desc !!}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection