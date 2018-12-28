@extends('includes.layout')

@section('content')
<div class="container">
     @include('includes.nav')
  <h2 class="h2 mt-3">Device Details</h2>

     <ul class="list-group mt-5">
         <li class="list-group-item"> <span class="font-weight-bold">Serial Number: </span>  {{$device->serialNumber}}</li>
         <li class="list-group-item"> <span class="font-weight-bold">Document Type: </span> {{$device->name}}</li>
          <li class="list-group-item"> <span class="font-weight-bold"> Location Found: </span> {{$device->type}}</li>
           <li class="list-group-item"> <span class="font-weight-bold"> Owner: </span> {{$device->model}}</li>



     </ul>
 <img class="rounded mx-auto d-block img-fluid" width="400px" height="400px" src="{{asset('storage/upload')}}/{{$device->image}}" >
    </div>
@endsection
