@extends('admin.includes.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>

                  <form action="{{ route('posts.store')}}" method="POST">
                        @csrf 

                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>


                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content"></textarea>
                            </div>

                            <button class="btn btn-success" type="submit">Create</button>
                            <button class="btn btn-warning" type="reset">Reset</button>

                        </div>
                  </form>









                    
                    
                   
                </div>
            </div>


@endsection