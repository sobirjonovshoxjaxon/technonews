@extends('admin.includes.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Edit Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>

                  <form action="{{ route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf 

                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <img width="100" src="{{ asset('storage/'.$post->image)}}" alt="">

                            </div>


                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-warning" type="submit">Edit</button>
                            <button class="btn btn-primary" type="reset">Reset</button>

                        </div>
                  </form>
 
                   
                </div>
            </div>


@endsection