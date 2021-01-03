@extends('layouts.app')

@section('title', __('Entry Form'))

@section('content')
<ul class="breadcrumb hidden-print">
    <li class="active"></li>
</ul>
<h2>Franchisee Daily Report</h2>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        
        <div class="panel-body">
           1.  <a href="{{route('franchiseereport')}}" class="btn btn-info btn-rounded">Report Management<span class="new-gif-wr"></span> </a><br><hr>
           2.  <a href="{{route('franchiseelist')}}" class="btn btn-info btn-rounded">Franchisee List <span class="new-gif-wr"></span></a><br><hr>
           3.  <a href="{{route('visitlists')}}" class="btn btn-info btn-rounded">Visit Form Report </a><br><hr>
         <!--  4.  <a href="{{route('demolists')}}" class="btn btn-info btn-rounded">Demo Form Report <span class="new-gif-wr"></span></a><br><hr>
           5.  <a href="{{route('agreementlist')}}" class="btn btn-info btn-rounded">Service Agreement Report <span class="new-gif-wr"></span></a>-->
        </div>
        <div class="panel-footer">
            
        </div>
       
    </div>
</div>
@endsection
