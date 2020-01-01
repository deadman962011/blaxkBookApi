@extends('layout.master')


@section('content')


<!-- dispaly catigories -->
<div class="row">

<div class="col-sm-9 col-sm-offset-2">

@if(!empty($Authors))
 @foreach( $Authors as $Author)
 <div class="panel panel-default">
   <div class="panel-body">
    <div class="col-sm-10"><h4>{{$Author->AuthorName}}  ({{$Author->AuthorBooksNum}})</h4></div>
    <form method='post'>
    <div class="col-sm-2"><button name='DelSub' value='{{$Author->id}}' class="btn btn-danger pull-right">X</button></div>
     {{ csrf_field() }}
    </form>
    
    
   </div>
 </div>
 @endforeach
@endif
</div>

</div>





 <!-- Add catigory form -->
 <div class="row">
 <div class="col-sm-9 col-sm-offset-2">
  <form method='POST' class="form-horizontal">
   <div class="form-group">
     <div class="form-group"><div class="col-sm-3"><label for="AuthorNameI" class="form-label">Author Name:</label></div><div class="col-sm-8"><input type="text" name="AuthorNameI"  class="form-control"></div></div>
     <div class="form-group"><div class="col-sm-3"><label for="AuthorNameI" class="form-label">Author picture:</label></div><div class="col-sm-8"><input type="text" name="AuthorPicI"  class="form-control"></div></div>
     <div class="form-group"><div class="col-sm-3"><label for="AuthorNameI" class="form-label">Author Descreption:</label></div><div class="col-sm-8"><textarea type="text" name='AuthorDescI' class='form-control'rows='10'></textarea></div>
     <div class="form-group"><div class="col-sm-2"><input type="submit" name='AddSub' class='btn btn-primary'></div></div>
    {{ csrf_field()}}
   </div>
  </form>
 </div>
</div>


@endsection