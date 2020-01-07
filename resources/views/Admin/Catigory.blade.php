@extends('layout.master')


@section('content')



 <!-- Add catigory form -->
 <div class="row">
 <div class="col-sm-6 col-sm-offset-3">
  <form method='POST' class="form-horizontal">
   <div class="form-group">
    <div class="col-sm-5"><input type="text" name="CatigoryNameI" placeholder='Catigory name'  class="form-control"></div>
    <div class="col-sm-5"><input type="text" name="CatigoryIconI" placeholder='Catigory Icon'  class="form-control"></div>
    <div class="col-sm-2"><input type="submit" name='AddSub' class='btn btn-primary'></div>
    {{ csrf_field()}}
   </div>
  </form>
 </div>
</div>



<!-- dispaly catigories -->
<div class="row">



@if(!empty($Catigories))
 @foreach( $Catigories as $catigory)
 <div class="col-sm-4 ">
 <div class="panel panel-default">
   <div class="panel-body">
    <div class="col-sm-10"><h4>{{$catigory->CatigoryName}}  ({{$catigory->CatigoryBooksNum}})</h4></div>
    <form method='post'>
    <div class="col-sm-2"><button name='DelSub' value='{{$catigory->id}}' class="btn btn-danger pull-right">X</button></div>
     {{ csrf_field() }}
    </form>
    
    </div>
   </div>
 </div>
 @endforeach
@endif


</div>









@endsection