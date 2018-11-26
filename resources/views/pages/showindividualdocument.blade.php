

@extends('includes.layout')



@section('content')
     <ul>
         <li>   {{$document->serialNumber}}</li>
         <li> {{$document->name}}</li>
         <li>   <img  width="400px" height="400px" src="{{asset('storage/upload')}}/{{$document->image}}" ></li>
     </ul>
 <form action="">
     {{csrf_field()}}
     {{method_field('PATCH')}}
   <button type="submit" class="btn btn-info">Return</button>
     <button type="submit" class="btn btn-danger">NOT Returnrd</button>
 </form>


@stop

