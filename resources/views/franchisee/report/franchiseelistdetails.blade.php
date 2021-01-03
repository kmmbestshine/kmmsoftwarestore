@extends('layouts.app')

@section('title', )

@section('content')
<div class="panel panel-default" id="printablediv1" style="overflow-x:auto;">
<h1 class="page-header">
    Franchisee List
</h1>
    <table class="table table-condensed">
        <thead>
            
            <th class="text-center">S.N.</th>
            <th class="col-md-1 text-center">Date</th>
            <th class="col-md-1">Name</th>
            <th class="col-md-1">District-Taluk</th>
            <th class="col-md-3">Address</th>
            <th class="col-md-2 ">City</th>
            <th class="col-md-1">Contact No</th>
            <th class="col-md-1">Email</th>
        </thead>
        <tbody>
            @forelse($newRegister as $key => $nr)
             <tr>
                <td class="text-center"> {{1 + $key}}</td>
                <td class="text-center"> {{$nr->date}}</td>
                <td > {{$nr->name}}</td>
                <td >Dt- {{$nr->district}}<br>TK-{{$nr->taluka}}</td>
                <td > {{$nr->address}}</td>
                <td > {{$nr->city}}</td>
                <td > {{$nr->contact_no}}</td>
                <td > {{$nr->email}}</td>
                                        
                </tr>
            
            @empty
            <tr><td colspan="7">{{ __('nr.empty') }}</td></tr>
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