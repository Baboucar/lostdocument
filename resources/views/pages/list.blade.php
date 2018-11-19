@extends('includes.layout')

@section('content')
    <h1> List All Documents</h1>
       <div>
           {{--  <form action="{{route('document.search')}}" method="get">
               <input type="text" name="s">

           </form>  --}}
       </div>
       <div class="container">
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
              @foreach ($document as $li )
              <tr>
                  <td>  {{$li->serialNumber}}</td>
                  <td>{{$li->name}}</td>
                  <td>{{$li->location}}</td>
                  <td>{{$li->owner}}</td>

              </tr>

              @endforeach
          </tbody>
      </table>
    </div>
@endsection

