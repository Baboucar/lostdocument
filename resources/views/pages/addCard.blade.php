@extends('includes.layout')

@section('content')
 @include('includes.nav')
 <div class="container">

       <h3 class="h3 text-center mt-4">Enter Card Details Details</h3>
       <form action="{{route('addCard')}}" class="mt-5">
   <div  class="form-group ">
        <input type="text" class="form-control"  placeholder="enter serial number" name="serialNumber" required>
    </div>
     <div  class="form-group">
        <input type="text" class="form-control"  placeholder="enter owner" name="cardOwer" required>
    </div>

         <div  class="form-group">
        <input type="text" class="form-control"  placeholder="enter card type" name="cardtype" required>
        </div>
        <button class="btn btn-success btn-lg btn-block" type="submit" name="button">Save</button>
       </form>

 </div>
@endsection
