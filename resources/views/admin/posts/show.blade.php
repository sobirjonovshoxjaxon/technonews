@extends('admin.includes.main')
@section('content')

        <h2>Post Show Table</h2>

        <h5><b>Id: </b>{{ $post->id }}</h5>
        <h5><b>Title: </b>{{ $post->title }}</h5>
        <h5><b>Image: </b>{{ $post->image }}</h5>
        <img src="" alt="">

        <h5><b>Content: </b>{{ $post->content }}</h5>
        <h5><b>User_id: </b>{{ $post->user_id }}</h5>
        <h5><b>Created_at: </b>{{ $post->created_at }}</h5>
        <h5><b>Updated_at: </b>{{ $post->updated_at}}</h5>

        <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>


@endsection