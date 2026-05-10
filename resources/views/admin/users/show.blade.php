@extends('admin.includes.main')
@section('content')

        <h2>User Show Table</h2>

        <h5><b>Id: </b>{{ $user->id }}</h5>
        <h5><b>Name: </b>{{ $user->name }}</h5>

        <h5><b>Email: </b>{{ $user->email }}</h5>
        <h5><b>Password: </b>{{ $user->password }}</h5>
        <h5><b>User type: </b>{{ $user->user_type }}</h5>
        <h5><b>Created_at: </b>{{ $user->created_at }}</h5>
        <h5><b>Updated_at: </b>{{ $user->updated_at}}</h5>

        <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>


@endsection