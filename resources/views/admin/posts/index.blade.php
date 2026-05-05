@extends('admin.includes.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts Table</h4>
                    <a href="{{ route('posts.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Content</th>
                          <th>User_id</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach ($posts as $post)
                          <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                              <img width="100" src="{{ asset('storage/'.$post->image)}}" alt="">
                            </td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->user_id }}</td>
                            <td>
                              <a href="{{ route('posts.show',['post' => $post->id])}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                                @method('DELETE')
                                @csrf 
                                  <input type="hidden" name="post_id" value="{{ $post->id }}">

                                  <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                            </td>
                          </tr>
                        @endforeach
                          
                      


                      </table>
                        {{ $posts->links('vendor.pagination.bootstrap-5') }}
                    </div>
                  </div>
                
                </div>
            </div>

@endsection