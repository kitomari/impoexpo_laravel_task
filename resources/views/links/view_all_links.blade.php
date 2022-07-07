@extends('layouts.app')

@section('content')
    <div class="container">
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
                                <td><a href="{{ url('/short/{link}', $row->code) }}" target="_blank">{{ url('/short/{link}', $row->code) }}</a></td>
                                <td>{{$row->url}}</td>
                                <td>
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

