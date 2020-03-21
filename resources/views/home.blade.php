@extends('layouts.admin')
@section('title')
Dashboard
@stop

@section('heading')
Dashboard
@stop

@section('content')


<div class="row">
    <div class="col-lg-12 text-right">
        <ul>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link" style="font-size:35px;"><b>Welcome {{Auth::user()->name}}</b></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link" style="font-size:35px;">{{now()->format('d/m/Y')}}</a>
            </li>

        </ul>

    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Contacts</span>
                <span class="info-box-number">{{$contacts}}

                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-check-alt"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Messages Sent </span>
                <span class="info-box-number">{{$msg}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-rupee-sign"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Groups</span>
                <span class="info-box-number">{{$groups}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Remaining SMS balance</span>
                <span class="info-box-number">10000</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>





@stop
