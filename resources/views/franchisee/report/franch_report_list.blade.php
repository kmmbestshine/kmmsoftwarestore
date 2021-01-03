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
            <th class="col-md-1">Address</th>
            <th class="col-md-1">City</th>
            <th class="col-md-1">Contact No<br>Co-ordinator<br>Off Contact No</th>
            <th class="col-md-1">Email</th>
            <th class="col-md-3">KYC Download</th>
            <th class="col-md-1">Delete</th>
            
        </thead>
        <tbody>
             @forelse($newRegister as $key => $nr)
             <tr>
                <td class="text-center"> {{1 + $key}}</td>
                <td> {{$nr->date}}</td>
                <td> {{$nr->name}}</td>
                <td>Dt- {{$nr->district}}<br>TK-{{$nr->taluka}}</td>
                <td> {{$nr->address}}</td>
                <td> {{$nr->city}}</td>
                 <td> {{$nr->contact_no}}</td>
                <td> {{$nr->email}}</td>
                <td class="text-center"><div class="row">
                    <div >
                        @if($nr->photo !='')
                        <a href="{{ route('franch.download.photo', $nr->id) }}"class="btn btn-info">Photo</a>
                        @else
                            No Image
                        @endif
                    </div>
                                              
                    <div >
                     @if($nr->kyc_document !='')
                    <a href="{{ route('franch.download.kyc', $nr->id) }}"class="btn btn-info">KYC View</a>
                    @else
                         No Image
                    @endif
                    </div>
                                               
                    <div >
                    @if($nr->biodata !='')
                    <a href="{{ route('franch.download.resume', $nr->id) }}"class="btn btn-info">Resume</a>
                    @else
                     No Resume Found
                    @endif
                    </div>                    
                    </div>
                    </td>
                                        
                     <td>
                        @if($nr->name !='')
                        <form action="{{route('franch.register.delete', $nr->id)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field()}}
                            <input type="hidden" name="district" value="{{$district}}">
                            <input type="hidden" name="state" value="{{$state}}">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')" ><i class="fa fa-trash-o"></i></button>
                        </form>
                                                   
                         @endif
                        </td>
            
            </tr>
            @empty
            <tr><td colspan="7">{{ __('vf.empty') }}</td></tr>
            @endforelse
        </tbody>
    </table>
</div>



 <div class="panel panel-default" id="printablediv1" style="overflow-x:auto;">
<h1 class="page-header">
    Visit List
</h1>
    <table class="table table-condensed">
        <thead>
           
            <th class="text-center">S.N.</th>
            <th class="col-md-1 text-center">Type</th>
            <th class="col-md-1">Franchisee Name</th>
            <th class="col-md-1">Company Name</th>
            <th class="col-md-1">City</th>
            <th class="col-md-1">Contact No<br>Co-ordinator<br>Off Contact No</th>
            <th class="col-md-1">Email</th>
            <th class="col-md-1">Delete</th>
            
        </thead>
        <tbody>
             @forelse($visitForms as $key => $vf)
             <tr>
                <th> {{1 + $key}}</th>
                                        <td> {{$vf->software_type}}</td>
                                        <td> {{$vf->franchisee_id}}</td>
                                        <td> {{$vf->company_name}}</td>
                                        <td> {{$vf->city}}</td>
                                        <td> {{$vf->contact_no}}<br>{{$vf->coord_contact_no}}<br>{{$vf->off_contact_no}}</td>
                                        <td> {{$vf->email}}</td>
                                        <td>
                                            @if($vf->company_name !='')
                                                    <form action="{{route('franch.visit.delete', $vf->id)}}" method="post">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        {{ csrf_field()}}
                                                        <input type="hidden" name="district" value="{{$district}}">
                                                        <input type="hidden" name="state" value="{{$state}}">
                                                        <input type="hidden" name="taluka" value="{{$taluka}}">
                                                        
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')" ><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                   
                                            @endif
                                        </td>
            
            </tr>
            @empty
            <tr><td colspan="7">{{ __('vf.empty') }}</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
 
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
