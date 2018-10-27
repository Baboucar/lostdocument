@extends('includes.layout')


@section('content')
   <h3 class="h3">Enter Document Details</h3>

<div class="container">
          @include('includes.message')
 <form action="{{route('file')}}" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}
    <div  class="form-group">
        <input type="text" class="form-control"  placeholder="enter serial number" name="serialNumber" required>
    </div>
     <div class="form-group">
    <input type="text" class="form-control" placeholder="enter document name" name="name" id="" required>
    </div>
    <div class="form-group">
   <input type="text" class="form-control" placeholder="enter place found" name="location" id="" required>
 </div>
   <div class="form-group">
    <input type="text" class="form-control" placeholder="enter owner"  name="owner" required>
   </div>
   <div class="form-group">
        <label for="uploadfile">Upload File</label>
    <input type="file" name="file"  class="form-control-file" >
   </div>

    <button class="btn btn-success btn-lg btn-block" type="submit" name="button">Save</button>
 </form>
</div>
@endsection
