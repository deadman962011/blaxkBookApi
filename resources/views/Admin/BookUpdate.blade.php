@extends('layout.master')


@section('content')

<div class="row">


@if(!empty($Books))
@foreach( $Books as $book)

<a href="Update/{{$book->id}}">
<div class="col-sm-4">
 <div class="panel panel-primary">
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


@endsection