@extends('layout.master')


@section('content')


<div class="row">
 <div class="col-sm-12">
  <input type="text" name="SearchDel" placeholder='Search ' id="SearchDel" class="form-control">
 </div>
</div>

<br><br>
<br><br>

<div class="row">
<div class="col-sm-12 box">



@if(!empty($Books))

@foreach( $Books as $book)

<a href="{{$book->id}}">
<div class="col-sm-4">
 <div class="panel panel-danger">
  <div class="panel-body">
    <div class="media">
    <div class="media-body">
    <div class="media-heading"><img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt=""></div>
    <div class="media-bottom"><h4>{{$book->BookName}}</h4></div>
    </div>
    </div>
  </div>
 </div>
</div>
</a>
@endforeach
@endif


</div>
</div>


@endsection



@section('script')


<script >

$("document").ready(function(){

$('#SearchDel').on('keyup',function(){
    var value=
    $(this).val();

    $(".box *").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    })
})

})


</script>


@endsection