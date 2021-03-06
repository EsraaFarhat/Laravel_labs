@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger  mt-5 container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-4">
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Post creator</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
  </div>
@endsection