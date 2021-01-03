@extends('layouts.app')

@section('title', )

@section('content')
<div class="panel panel-default" id="printablediv1" style="overflow-x:auto;">
<h1 class="page-header">
    Visiting List
</h1>
    <table class="table table-condensed">
        <thead>
           
            <th class="text-center">S.N.</th>
            <th class="col-md-1 text-center">Date</th>
            <th class="col-md-1">Type</th>
            <th class="col-md-1">Franchisee Name</th>
            <th class="col-md-1">Company Name</th>
            <th class="col-md-1">HOD Name</th>
            <th class="col-md-1">Contact No<br>Co-ordinator<br>Off Contact No</th>
            <th class="col-md-1">No Of Student</th>
            <th class="col-md-1">No of Staff</th>
            <th class="col-md-1">Feed Back</th>
            <th class="col-md-1">City</th>
            <th class="col-md-1">Email</th>
        </thead>
        <tbody>
             @forelse($visitForms as $key => $vf)
             <tr>
            <th class="text-center"> {{1 + $key}}</th>
            <td> {{$vf->date}}</td>
            <td> {{$vf->software_type}}</td>
            <td> {{$vf->franchisee_id}}</td>
            <td> {{$vf->company_name}}</td>
            <td> {{$vf->hod_name}}</td>
            <td> {{$vf->contact_no}}<br>{{$vf->coord_contact_no}}<br>{{$vf->off_contact_no}}</td>
            <td> {{$vf->no_of_student}}</td>
            <td> {{$vf->no_of_staff}}</td>
            <td> {{$vf->feedback}}</td>
            <td> {{$vf->city}}</td>
            <td> {{$vf->email}}</td>  
            </tr>
            @empty
            <tr><td colspan="7">{{ __('vf.empty') }}</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
 <input type="button" value="Print " onclick="javascript:printDiv('printablediv1')" />
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
          "<h1></h1><thead></thead><tbody>" + 
          divElements + "</tbody>";
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
