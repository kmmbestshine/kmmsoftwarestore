@extends('layouts.app')

@section('title', __('Entry Form'))

@section('content')
<ul class="breadcrumb hidden-print">
    <li class="active"></li>
</ul>
<h2>Entry list</h2>
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        
        <div class="panel-body">
        <!-- 1.   <a href="{{url('franchasee/registerform')}}" class="btn btn-info btn-rounded">New Franchisee<span class="new-gif-wr"></span> </a><br><br><hr>-->
         1.   <a href="{{url('franchasee/visitform')}}" class="btn btn-info btn-rounded">Visit Form <span class="new-gif-wr"></span></a><br><br><hr>
        <!-- 2.   <a href="{{url('franchasee/demoform')}}" class="btn btn-info btn-rounded">Demo Form <span class="new-gif-wr"></span></a><br><br><hr>
         3.   <a href="{{url('franchasee/serviceagreement') }}" class="btn btn-info btn-rounded">Service Agreement <span class="new-gif-wr"></span></a>-->
        </div>
        <div class="panel-footer">
            
        </div>
       
    </div>
</div>
@endsection
