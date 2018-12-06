@extends('includes.layout')

@section('content')
<div class="container-fluid">
    <h1>Edit Document</h1>
    <form method="post"  action="{{action('DocumentController@updateDocument', $id)}}">

        <input name="_method" type="hidden" value="PATCH">
         <div  class="form-group">
        <input type="text" class="form-control" value="{{$document->serialNumber}}"  name="serialNumber" >
    </div>
     <div class="form-group">
    <input type="text" class="form-control" value="{{$document->name}}"  name="name"  >
    </div>
    <div class="form-group">
   <input type="text" class="form-control" value="{{$document->location}}"  name="location" >
 </div>
   <div class="form-group">
    <input type="text" class="form-control" value="{{$document->owner}}" placeholder="enter owner"  name="owner" >
   </div>
   <div class="form-group">
        <label for="uploadfile">Upload File</label>
    <input type="file" name="file"  class="form-control-file" >
   </div>

    <button class="btn btn-success btn-lg btn-block" type="submit" name="button">Save</button>
    </form>

</div>

@endsection
