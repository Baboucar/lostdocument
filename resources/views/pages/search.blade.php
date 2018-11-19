@extends('includes.layout')
@section('content')

<form action="/search" method="POST" >
      {{csrf_field()}}
      <div class="input-group">
          <input type="text" name="q" id="" >
          <button type="submit" class="btn btn-success">Search</button>

      </div>
</form>
  @if (isset($details))


<table class="table">
        <thead class="thead-dark">
                <tr>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Document Name</th>
                      <th scope="col">Location Found</th>
                      <th scope="col">Owner</th>
                      <th scope="col">Image</th>
                      <th scope="col">Status</th>

                  </tr>
                </thead>

                <tbody>

                    @foreach ($details as $user)

                      <tr>
                          <td><a href="/document/{{$user->id}}">{{$user->serialNumber}}</a></td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->location}}</td>
                          <td>{{$user->owner}}</td>
                           <td>image</td>
                           @if($user->status == 0)
                             <td class="btn btn-danger">Not Returned</td>
                            @else
                             <td class="btn btn-success">Returned</td>
                            @endif

                    </tr>
                    @endforeach
                </tbody>

</table>

@endif
{{--  <script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
         $.ajax({
             type:'get',
             url:'{{URL::to('search')}}',
             data:{'search':$value},
             success:function(data){
                 console.log(data);

             }
         })

    })
</script>  --}}
@endsection


