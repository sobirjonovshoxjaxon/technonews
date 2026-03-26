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
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->user_id }}</td>
                            <td>
                              <a href="{{ route('posts.show',['post' => $post->id])}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <a href="" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                       


                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>

@endsection