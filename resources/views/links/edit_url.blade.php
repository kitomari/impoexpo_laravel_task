@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form to Update/Renerate URL</div>
                <div class="card-body">
                    <form method="POST" action="{{url('update_link',$edit_url->id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUrl">Re-Enter URL link</label>
                            <input type="text" name="url" class="form-control" id="exampleInputUrl" value="{{$edit_url->url}}" aria-describedby="urlHelp" placeholder="Enter URL">
                        </div>
                        <button type="submit" class="btn btn-primary">Regenerate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

