@extends('layout.layout')
@section('content')
    <a href="/" id="go">
        <img src="{{asset('images')}}/done-upload.png" style="z-index: 999999;display: block; position:fixed; left:50%;top:50%; margin-left:-100px; margin-top:-100px;" >
    </a>
@endsection
@section('js')
    <script>
        setTimeout(function() {document.getElementById('go').click()}, 3000);
    </script>
@endsection