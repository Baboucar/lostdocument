@extends('layouts.app')

@section('content')
<div class="container">
 @include('includes.nav')
  @include('includes.message')
<form action="/search" method="POST"  >
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
                      <th scope="col">Document Name</th>
                      <th scope="col">Location Found</th>
                      <th scope="col">Owner</th>

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

                           @if($user->status == 0)
                             <td class="btn btn-danger disabled mt-2" >Not Returned</td>
                            @else
                             <td class="btn btn-success disabled mt-2" >Returned</td>
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
</div>
@endsection


