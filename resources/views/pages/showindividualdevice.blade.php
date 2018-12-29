@extends('includes.layout')

@section('content')
<div class="container">
     @include('includes.nav')
  <h2 class="h2 mt-3">Device Details</h2>

     <ul class="list-group mt-5">
         <li class="list-group-item"> <span class="font-weight-bold">Serial Number: </span>  {{$device->serialNumber}}</li>
         <li class="list-group-item"> <span class="font-weight-bold">Device Name: </span> {{$device->name}}</li>
          <li class="list-group-item"> <span class="font-weight-bold"> Device Type: </span> {{$device->type}}</li>
           <li class="list-group-item"> <span class="font-weight-bold"> Model: </span> {{$device->model}}</li>



     </ul>
 <img class="rounded mx-auto d-block img-fluid" width="400px" height="400px" src="{{asset('storage/upload')}}/{{$device->image}}" >
    </div>
@endsection
