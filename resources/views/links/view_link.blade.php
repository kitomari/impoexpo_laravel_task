@extends('layouts.app')

@section('content')
<div class="container">
      @foreach ($single_link as $item)
        <a href="{{ url('/short',$item->code) }}" target="_blank">{{$item->url }}</a>
      @endforeach
</div>
@endsection
