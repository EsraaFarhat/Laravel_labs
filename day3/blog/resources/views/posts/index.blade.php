@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="d-flex justify-content-center">
        <a class="btn btn-success mt-5" href="{{ route('posts.create') }}">Create post</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by</th>
            <th scope="col">Created at</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post['id'] }}</th>
                <td>{{ $post['title'] }}</td>
                <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
                <td>{{$post->created_at_formated}}</td>
                <td>
                    {{-- <a class="btn btn-info" href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}">View</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}">Edit</a>
                    <a class="btn btn-danger" href="#">Delete</a> --}}
                    <a class="btn btn-info" href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" >View</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}" >Edit</a>
                    <form method="post"  style="display:inline;" action="{{route('posts.destroy', [ 'post' => $post['id'] ])}}" >
                    @csrf
                    @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this post?')" title="delete" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    <div>
        {!!$posts->links()!!}
    </div>
</div>
@endsection