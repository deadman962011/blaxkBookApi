@extends('layout.master')


@section('content')


<div class="row">
 <div class="col-sm-6 col-sm-offset-3">
  <form  method="post" class="form-horizontal">
   
   <div class="form-group">
    <div class="col-sm-2"><label for="BlaxkUserI" class="label-form">UserName:</label></div>
    <div class="col-sm-10"><input type="text" name="BlaxkUserI"  class="form-control" required></div>
   </div>


   <div class="form-group">
    <div class="col-sm-2"><label for="BlaxkPassI" class="label-form">UserPass:</label></div>
    <div class="col-sm-10"><input type="text" name="BlaxkPassI"  class="form-control" required></div>
   </div>

   <div class="form-group "><div class="col-sm-2 col-sm-offset-2"><input type="submit"  class="btn btn-primary"></div></div>

   {{ csrf_field() }}
  
  </form>
 </div>
</div>

@endsection