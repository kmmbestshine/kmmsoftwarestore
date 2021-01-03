@extends('layouts.app')
@section('title')
    Demo Listing Page
@endsection
@section('css')

@endsection
<!-- page content -->
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Demo Management</h3>
                </div>
                
            </div>
            <div class="clearfix"></div>
            @if($success_message)
                <div class="alert alert-success">
                    {{ $success_message }}
                </div>
            @endif
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
            @endif
            @if(Session::has('error_message'))
                <div class="alert alert-danger">
                    {{ Session::get('error_message') }}
                </div>
            @endif
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Listing Demo</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        
                       
                        <div class="x_content" id="printablediv1" style="overflow-x:auto;">
                            <h2>Demo Form Report Of <strong> {{$taluka}} </strong>Taluk Of <strong> {{$district}} </strong> District Of  <strong> {{$state}} </strong> </h2>
                             <table >
                                <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Franchisee Name</th>
                                    <th>Company Name</th>
                                    <th>HOD Name</th>
                                    <th>Contact No<br>Co-ordinator<br>Off Contact No</th>
                                    <th>No of Student</th>
                                    <th>No of Staff</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($demoForms as $df)
                                    <tr>
                                        <th> {{$i++}}</th>
                                        <td> {{$df->date}}</td>
                                        <td> {{$df->software_type}}</td>
                                        <td> {{$df->franchisee_id}}</td>
                                        <td> {{$df->company_name}}</td>
                                        <td> {{$df->hod_name}}</td>
                                        <td> {{$df->contact_no}}<br>{{$df->coord_contact_no}}<br>{{$df->off_contact_no}}</td>
                                        <td> {{$df->no_of_student}}</td>
                                        <td> {{$df->no_of_staff}}</td>
                                        <td> {{$df->city}}</td>
                                        <td> {{$df->address}}</td>
                                        <td> {{$df->email}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <input type="button" value="Print " onclick="javascript:printDiv('printablediv1')" />
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@section('script')
<script type="text/javascript">
function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
</script>
<style>
table, th, td {
  border: 1px solid black;
}
</style>

@endsection