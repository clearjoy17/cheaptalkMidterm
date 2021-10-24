@extends('base')

@section('content')

<div class="container bg-transparent">
  <h1 class="text-white pt-2 pb-2">Users</h1>
  <hr>
  @foreach($users as $u)
  @if ($u->gender == 'Female')
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color:dimgray;">
  @else
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color:lightslategray;">
  @endif
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-user-circle"></i> {{$u->name}}</h5>
      <a href="/authors/{{$u->id}}" class="btn btn-outline-light">Show Posts <i class="fas fa-chevron-circle-right"></i></a>
    </div>
  </div>
  @endforeach

</div>

@endsection

