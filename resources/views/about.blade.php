@extends('layout.master')
@section('title','About')
@section('content')
    <div class="container">
        <div class="row">
            I am about page
            @if(count($data)>0)
                <ol>
                @foreach($data as $person)
                    <li>{{$person}}</li>

                @endforeach
                </ol>
            @endif
        </div>
    </div>
@endsection