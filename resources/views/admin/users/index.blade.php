@extends('admin.includes.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Users Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>User type</th>
                          <th colspan="3">Action</th>
                        </tr>

                        
                        @foreach ($users as $user)
                            
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>
                              <a href="{{ route('users.show',$user->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <form action="{{ route('users.destroy',$user->id)}}" onclick="return confirm('Are you sure!')" method="POST">
                                    @csrf 
                                    @method('DELETE')

                                    <input type="hidden" value="{{ $user->id}}" name="user_id">

                                    <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                            </td>
                          </tr>
                        @endforeach                         
                       
                          
                      


                      </table>
                        
                    </div>
                  </div>
                
                </div>
            </div>

@endsection