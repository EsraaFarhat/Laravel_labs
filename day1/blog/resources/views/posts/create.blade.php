@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Post creator</label>
            <input type="text" class="form-control" id="post_creator" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
  </div>
@endsection