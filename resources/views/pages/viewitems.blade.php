@extends('includes.layout')

@section('content')
 @include('includes.nav')
  <div class="container mt-5 mt-5">
      <div class="row justify-content-center align-items-center">
      <a href="/search" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">View Lost Documents</a>
        <a href="/searchDevice" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">View Lost Devies</a>
          <a href="/searchCard" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">View Lost Cards</a>

    </div>
  </div>

@endsection
