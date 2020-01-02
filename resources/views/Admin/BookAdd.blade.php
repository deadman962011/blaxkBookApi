@extends('layout.master')



@section('content')

<link rel="stylesheet" href="http://127.0.0.1/cdn/select2/css/select2.min.css">









<h4>Add Book</h4>

<div class="row">

 <form  method="post" class="form-horizontal">

  <!--Book name  -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookNameI" class="form-label">Book Name:</label></div>
   <div class="col-sm-8"><input type="text" name='BookNameI' class="form-control"></div>
  </div> 

  <!-- Book Pic -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookPicI" class="form-label">Book 3ilaf:</label></div>
   <div class="col-sm-8"><input type="text" name="BookPicI"  class="form-control"></div>
  </div>


  <!-- Book link -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookLinkI" class="form-label">Book Link:</label></div>
   <div class="col-sm-8"><input type="text" name="BookLinkI"  class="form-control"></div>
  </div>


  <!-- Book Catigory  -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookCatigoryI" class="form-label">Book Catigory:</label></div>
   <div class="col-sm-4"><select name="BookCatigoryI" class='BookSelect form-control'>
    @foreach( $catigories as $catigory)
     <option value="{{$catigory->id}}">{{$catigory->CatigoryName}}</option>
    @endforeach
   </select>
   </div>


   <div class="col-sm-3"><a href="/Admin/Catigory/" class="btn btn-primary">manage  Catigories</a></div>
  </div>



  <!-- Book author  -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookAuthorI" class="form-label">Book Author:</label></div>
   <div class="col-sm-4"><select  name="BookAuthorI" class='form-control BookSelect ' >
    @foreach( $Authors as $Author)
     <option value="{{$Author->id}}">{{$Author->AuthorName}}</option>
    @endforeach 
   </select>
   </div>


   <div class="col-sm-3"><a href="/Admin/Author" class="btn btn-primary">manage Authors</a></div>
  </div>


    <!-- Book Review -->
    <div class="form-group">
   <div class="col-sm-2"><label for="BookReviewI" class="form-label">Review:</label></div>
   <div class="col-sm-8"><select name="BookReviewI" class='form-control' >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
   </select>
   </div>
  </div>


  <!-- Book Descreption  -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookDescI" class="form-label">Book Descreption:</label></div>
   <div class="col-sm-8"><textarea name="BookDescI" class='form-control'  rows="10"></textarea></div>
  </div>






  <!-- book Language -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookLangI" class="form-label">Book Language:</label></div>
   <div class="col-sm-8"><input type="text" name='BookLangI' class="form-control"></div>
  </div>

 <!-- Pages Number -->
 <div class="form-group">
   <div class="col-sm-2"><label for="BookPagesNumI" class="form-label">Book Pages Number:</label></div>
   <div class="col-sm-8"><input type="text" name='BookPagesNumI' class="form-control"></div>
  </div>

    <!-- Book size -->
  <div class="form-group">
   <div class="col-sm-2"><label for="BookSizeI" class="form-label">Book Size:</label></div>
   <div class="col-sm-8"><input type="text" name='BookSizeI' class="form-control"></div>
  </div>  

    <!-- Book Relase Date  -->
    <div class="form-group">
   <div class="col-sm-2"><label for="BookRelaseDateI" class="form-label">Book relase Date:</label></div>
   <div class="col-sm-8"><input type="date" name='BookRelaseDateI' class="form-control"></div>
  </div>
  <!-- submit  -->
  <div class="form-group">
   <div class="col-sm-3 col-sm-offset-2"><input type="submit"  class="btn btn-primary"></div>
  </div>

  {{  csrf_field()  }}

 </form>







</div>



@section('script')

<script >

$("document").ready(function(){
    $('.BookSelect').select2();
})

</script>
@endsection





@endsection