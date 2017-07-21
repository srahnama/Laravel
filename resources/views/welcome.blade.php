@extends("leyout")
    @section("content")
        @foreach($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    @endsection