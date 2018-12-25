@extends('includes.layout')

@section('content')
 @include('includes.nav')
  @include('includes.message')
<form action="/searchDevice" method="POST"  >
      {{csrf_field()}}
      <div class="input-group">
          <input class="pt-4 mt-3" type="text" name="q" id="" >
          <button type="submit" class="btn btn-success pt-4 mt-3 ml-3 pl-4">Search</button>

      </div>
</form>

 @if (isset($details))


<table class="table mt-4 table-striped">
        <thead class="thead-dark">
                <tr>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Name</th>
                      <th scope="col">Type</th>
                      <th scope="col">Model</th>

                      <th scope="col">Status</th>

                  </tr>
                </thead>

                <tbody>
@foreach ($details as $device )
   <tr>
     <td>{{$device->serialNumber}}</td>
<td>{{$device->type}}</td>
  <td>{{$device->name}}</td>
    <td>{{$device->model}}</td>
     @if($device->status == 0)
                             <td class="btn btn-danger disabled mt-2" >Not Returned</td>
                            @else
                             <td class="btn btn-success disabled mt-2" >Returned</td>
                            @endif

   </tr>



@endforeach

                </tbody>

</table>
@endif
@endsection
