@extends('includes.layout')

@section('content')
   @include('includes.nav')
  @include('includes.message')

       <div class="container">
             <div>
            <form action="/searchCard" method="POST"  >
      {{csrf_field()}}
      <div class="input-group">
          <input class="pt-4 mt-3" type="text" name="q" id="" >
          <button type="submit" class="btn btn-success pt-4 mt-3 ml-3 pl-4">Search</button>

      </div>
</form>
       </div>
            @if (isset($details))

      <table class="table mt-5">
          <thead class="thead-dark">
          <tr>
                <th scope="col">Serial Number</th>
                <th scope="col">Document Name</th>
                <th scope="col">Location Found</th>


                <th scope="col">Status</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($details as $li )
              <tr>

                   <td><a href="/card/{{$li->id}}">{{$li->serialNumber}}</a></td>
                  <td>{{$li->owner}}</td>
                  <td>{{$li->type}}</td>
                @if($li->status == 0)
                             <td class="btn btn-danger disabled mt-2" >Not Returned</td>
                            @else
                             <td class="btn btn-success disabled mt-2" >Returned</td>
                            @endif

              </tr>

              @endforeach
          </tbody>
      </table>
@endif
    </div>
@endsection

