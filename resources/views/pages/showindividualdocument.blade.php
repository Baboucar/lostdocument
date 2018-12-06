

@extends('includes.layout')



@section('content')
 <div class="container">
  <h2 class="h2 mt-3">Item Details</h2>

     <ul class="list-group mt-5">
         <li class="list-group-item"> <span class="font-weight-bold">Serial Number: </span>  {{$document->serialNumber}}</li>
         <li class="list-group-item"> <span class="font-weight-bold">Document Type: </span> {{$document->name}}</li>
          <li class="list-group-item"> <span class="font-weight-bold"> Location Found: </span> {{$document->location}}</li>
           <li class="list-group-item"> <span class="font-weight-bold"> Owner: </span> {{$document->owner}}</li>


     </ul>
       <img class="rounded mx-auto d-block img-fluid" width="400px" height="400px" src="{{asset('storage/upload')}}/{{$document->image}}" >
 <form method="POST" action="{{action('DocumentController@update', $document->id)}}">

   @csrf
    <input name="_method" type="hidden" value="PATCH">
     <input type="text" value="{{1}}" name="status" hidden >
   <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Return</button>

 </form>

 <form method="POST" action="{{action('DocumentController@update', $document->id)}}">

   @csrf
    <input name="_method" type="hidden" value="PATCH">
     <input type="text" value="{{0}}" name="status" hidden>
   <button type="submit" class="btn btn-secondary btn-lg btn-block mt-2">Not Returned</button>


 </form>
  {{--  <button type="submit" class="btn btn-success btn-lg btn-block mt-2">Edit</button>  --}}
  <a href="/document/{{$document->id}}/edit" class="btn btn-success btn-lg btn-block mt-2">Edit</a>

</div>

@endsection

