@extends('includes.layout')
@section('content')
 @include('includes.nav')
     <div class="container">
<h3 class="h3 text-center mt-4">Enter Device  Details</h3>
     <form action="{{route('addDevice')}}">

<div  class="form-group ">
        <input type="text" class="form-control"  placeholder="enter serial number" name="serialNumber" required>
</div>
<div  class="form-group ">
        <input type="text" class="form-control"  placeholder="enter serial device name" name="name" required>
</div>
<div  class="form-group ">
        <input type="text" class="form-control"  placeholder="enter device type" name="type" required>
</div>
<div  class="form-group ">
        <input type="text" class="form-control"  placeholder="enter  device model" name="model" required>
</div>
   <button class="btn btn-success btn-lg btn-block" type="submit" name="button">Save</button>
     </form>
     </div>
@endsection
