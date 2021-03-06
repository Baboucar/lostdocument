@extends('includes.layout')
@section('content')
 @include('includes.nav')
     <div class="container">
<h3 class="h3 text-center mt-4">Enter Device  Details</h3>
     <form action="{{route('addDevice')}}" enctype="multipart/form-data" method="POST">
   {{csrf_field()}}
   <div  class="form-group ">
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
  <div class="form-group">
        <label for="uploadfile">Upload Card</label>
    <input type="file" name="file"  class="form-control-file" >
   </div>
   <button class="btn btn-success btn-lg btn-block" type="submit" name="button">Save</button>
     </form>
     </div>
@endsection
