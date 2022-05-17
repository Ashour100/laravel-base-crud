@extends('layouts.base')

@section('title','Single Comic')


@section('main-content')
<div class="upper-comic-section">
    <img class="w-100 jumbo" src="{{asset('images/jumbotron.jpg')}}" alt="">
    <div class="blueBar"></div>
    <img class="thumb" src="{{$comic->thumb}}" alt="">
</div>
<div class="mid-comic-section mx-auto mt-5 flex gap-1">
    <div class="left">
        <h4>{{$comic->title}}</h4>
        <div class="greenBar d-flex text-white p-2 mb-2">
            <div class="left w-75 flex px-2">
                <span><span class="opacity-75"> U.S. Price:</span> {{$comic->price}}</span>
                <span class="opacity-75">AVAILABLE</span>
            </div>
            <div class="right w-25 text-center">
                <a href="">Check Availability</a>
            </div>
        </div>
        <p>{{$comic->description}}</p>
    </div>
    <div class="right text-end">
        <span class="text-secondary fw-bold">ADVERTISMENT</span>
        <a href=""><img src="{{asset('images/addddddd.jpg')}}" alt="Ad"></a>
    </div>
</div>

@endsection