@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Update Personal details
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('update_profile',$user_details->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" name="name" id="username" value="{{$user_details->name}}" placeholder="Enter name">
                      </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$user_details->email}}" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
