@extends('layouts.app')

@section('content')
<div class="carousel">
    <div class="list">
        <div class="item">
            <img src="{{ asset('images/1.jpg') }}">
            <div class="content">
                <div class="author">JANG</div>
                <div class="title">DESIGN SLIDER</div>
                <div class="topic">PHILIPPINES</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In consequuntur error nulla asperiores consectetur! Quaerat illum recusandae ipsam animi et mollitia rerum ut repudiandae earum, reiciendis saepe ullam expedita dicta!
                </div>
                <div class="buttons">
                    <button>SEE MORE</button>
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('images/2.jpg') }}">
            <div class="content">
                <div class="author">JANG</div>
                <div class="title">DESIGN SLIDER</div>
                <div class="topic">PHILIPPINES</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In consequuntur error nulla asperiores consectetur! Quaerat illum recusandae ipsam animi et mollitia rerum ut repudiandae earum, reiciendis saepe ullam expedita dicta!
                </div>
                <div class="buttons">
                    <button>SEE MORE</button>
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('images/3.jpg') }}">
            <div class="content">
                <div class="author">JANG</div>
                <div class="title">DESIGN SLIDER</div>
                <div class="topic">PHILIPPINES</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In consequuntur error nulla asperiores consectetur! Quaerat illum recusandae ipsam animi et mollitia rerum ut repudiandae earum, reiciendis saepe ullam expedita dicta!
                </div>
                <div class="buttons">
                    <button>SEE MORE</button>
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('images/4.jpg') }}">
            <div class="content">
                <div class="author">JANG</div>
                <div class="title">DESIGN SLIDER</div>
                <div class="topic">PHILIPPINES</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In consequuntur error nulla asperiores consectetur! Quaerat illum recusandae ipsam animi et mollitia rerum ut repudiandae earum, reiciendis saepe ullam expedita dicta!
                </div>
                <div class="buttons">
                    <button>SEE MORE</button>
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="thumbnail">
        <div class="item">
            <img src="{{ asset('images/2.jpg') }}">
            <div class="content">
                <div class="title">
                    Name Slider
                </div>
                <div class="description">
                    Description
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/3.jpg') }}">
            <div class="content">
                <div class="title">
                    Name Slider
                </div>
                <div class="description">
                    Description
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/4.jpg') }}">
            <div class="content">
                <div class="title">
                    Name Slider
                </div>
                <div class="description">
                    Description
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('images/1.jpg') }}">
            <div class="content">
                <div class="title">
                    Name Slider
                </div>
                <div class="description">
                    Description
                </div>
            </div>
        </div>
    </div>

    <div class="arrows">
        <button id="prev"> ← </button>
        <button id="next"> → </button>

    </div>
    <div class="time"></div>
</div>
<script src="{{ asset('app.js') }}"></script> <!-- Replace with correct path to your JavaScript -->

@endsection