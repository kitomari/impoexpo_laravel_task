{{-- @extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form to generate URL</div>
                <div class="card-body">
                    <form method="POST" action="{{route('generate_link')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUrl">Enter URL link</label>
                            <input type="text" name="shortlink" class="form-control" id="exampleInputUrl" aria-describedby="urlHelp" placeholder="Enter URL">
                        </div>
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <h1>How to create url shortener using Laravel? - ItSolutionStuff.com</h1> --}}
        <div class="card">
        <div class="card-header">
            <h2>Generated URLs</h2>
        </div>
        <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Short Link</th>
                            <th>Entered Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($short_links as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td><a href="{{ $row->code }}" target="_blank">{{ $row->code }}</a></td>
                                <td>{{$row->url}}</td>
                                <td>
                                    {{-- <a href="{{url('category-edit/'.$item->id)}}" class="badge btn-primary">Update</a> --}}
                                    <a href="{{url('view_link/'.$row->id)}}" class="badge bg-success py-2 px-3 btn-success">View</a>
                                    <a href="{{url('edit_url/'.$row->id)}}" class="badge bg-warning py-2 px-3 btn-warning">Update</a>
                                    <a href="#" class="badge bg-primary py-2 px-3 btn-primary">Disable</a>
                                    <a href="#" class="badge bg-danger py-2 px-3 btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>

    </div>
@endsection


