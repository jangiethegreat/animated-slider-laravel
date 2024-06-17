@extends('layouts.app')

@section('content')
<div class="carousel">
    <div class="list">
        @foreach ($carouselItems as $item)
        <div class="item">
            <img src="{{ asset($item->image_path) }}">
            <div class="content">
                <div class="author">{{ $item->author }}</div>
                <div class="title">{{ $item->title }}</div>
                <div class="topic">{{ $item->topic }}</div>
                <div class="des">{{ $item->description }}</div>
                <div class="buttons">
                    <button>SEE MORE</button>
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="thumbnail">
        @foreach ($carouselItems as $item)
        <div class="item">
            <img src="{{ asset($item->image_path) }}">
            <div class="content">
                <div class="title">{{ $item->title }}</div>
                <div class="description">{{ $item->topic }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="arrows">
        <button id="prev"> ← </button>
        <button id="next"> → </button>
    </div>
    <div class="time"></div>
</div>
<script src="{{ asset('app.js') }}"></script> <!-- Replace with correct path to your JavaScript -->

@endsection