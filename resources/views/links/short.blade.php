
<h3><a href="{{url('/welcome')}}">Go Back</a></h3>
<h3>Generated Urls</h3>

<div class="container">
    <a href="{{ url('/short/'. $url->code) }}" target="_blank"> {{ $url->code }} </a>
</div>
