

@extends('includes.layout')



@section('content')
     <ul>
         <li>   {{$document->serialNumber}}</li>
         <li> {{$document->name}}</li>
         <li>   <img  width="400px" height="400px" src="{{asset('storage/upload')}}/{{$document->image}}" ></li>
     </ul>



@stop

