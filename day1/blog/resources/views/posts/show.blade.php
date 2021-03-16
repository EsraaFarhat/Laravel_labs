@extends('layouts.app')

@section('content')

  <div class="card mt-2">
    <div class="card-header" style="background-color: lightgray;">
      <h5>Post info</h5>
    </div>
    <div class="card-body">
      <p class="card-title"><b>Title: </b> {{$post['title']}}</p>
      <p class="card-text"><b>Description: </b> {{$post['description']}}</p>
    </div>
  </div>

  <div class="card mt-2">
    <div class="card-header" style="background-color: lightgray;">
      <h5>Post creator info</h5>
    </div>
    <div class="card-body">
      <p class="card-title"><b>Name: </b> {{$post['posted_by']}}</p>
      <p class="card-text"> <b>Created at: </b>{{$post['created_at']}}</p>
    </div>
  </div>

@endsection
