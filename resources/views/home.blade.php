@extends('layouts.layout')
@section('content')

            <div class="contenitore">
                @foreach ($movies as $movie)
                <div class="square">
                    <h4>{{$movie['title']}}</h4>
                    <div>{{$movie['original_title']}}</div>
                    <div>{{$movie['nationality']}}</div>
                    <div>{{$movie['vote']}}</div>
                </div>
                @endforeach
            </div>
      

@endsection