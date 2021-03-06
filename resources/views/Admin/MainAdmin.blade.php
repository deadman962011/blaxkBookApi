
@extends('layout.master')



@section('content')


 
 <div class="row">
  <div class="box col-sm-12">

<a href="/Admin/Book/Add/">
    <div class="col-sm-3">
      <div class="panel panel-primary">
       <div class="panel-body">
        <div class="blaxkBook">
        <img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt="">
        <h4>Add new book</h4>
       </div>
  </div>
 </div>
</div>
</a>




<a href="Admin/Book/Del/">
    <div class="col-sm-3">
      <div class="panel panel-danger">
       <div class="panel-body">
        <div class="blaxkBook">
        <img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt="">
        <h4>Delete book</h4>
        </div>
  </div>
 </div>
</div>
</a>



<a href="Admin/Book/Update/">
    <div class="col-sm-3">
      <div class="panel panel-warning">
       <div class="panel-body">
         <div class="blaxkBook">
        <img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt="">
        <h4>edit book</h4>
        </div>
  </div>
 </div>
</div>
</a>






@foreach( $books as $book)
<a href="http://127.0.0.1:4000/{{$book->id}}">
    <div class="col-sm-3">
      <div class="panel panel-default">
       <div class="panel-body">
        <div class='blaxkBook'>
         <img class='img-responsive' src="{{$book->BookPic}}" alt="">
         <h4>{{$book->BookName}}</h4>
         <h5>{{ $book->Author->AuthorName}}</h5>
      </div>
  </div>
 </div>
</div>
</a>


@endforeach
  </div>
 </div>




 <div class="row">
     <div class="box col-sm-12">
      <a href="Catigory/">
       <div class="col-sm-3">
        <div class="panel panel-primary">
         <div class="panel-body">
     
             <img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt="" >
             <h4>manage Catigory</h4>
          </div>
 </div>
</div>
</a>



@foreach( $catigories as $catigory)


      <a href="Catigory/">
       <div class="col-sm-3">
        <div class="panel panel-default">
         <div class="panel-body">
          <div class="media">
           <div class="media-body">
           <div class="media-heading"><img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt=""></div>
           <div class="media-bottom"><h4>{{$catigory->CatigoryName}}</h4></div>
     </div>
    </div>
  </div>
 </div>
</div>
</a>


@endforeach



     </div>
 </div>



 <div class="row">
    <div class="box col-sm-12">
     <a href="/Admin/Author/">
       <div class="col-sm-3">
        <div class="panel panel-primary">
         <div class="panel-body">
          <div class="media">
           <div class="media-body">
           <div class="media-heading"><img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt=""></div>
           <div class="media-bottom"><h4>manage Authors</h4></div>
     </div>
    </div>
  </div>
 </div>
</div>
</a>



@foreach($Authors as $author)

<a href="Admin/Author/">
       <div class="col-sm-3">
        <div class="panel panel-default">
         <div class="panel-body">
          <div class="media">
           <div class="media-body">
           <div class="media-heading"><img class='img-responsive' src="http://127.0.0.1/cdn/images/2.jpg" alt=""></div>
           <div class="media-bottom"><h4>{{$author->AuthorName}}</h4></div>
     </div>
    </div>
  </div>
 </div>
</div>
</a>


@endforeach




     </div>
 </div>




@endsection