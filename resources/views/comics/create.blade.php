@extends('layouts.base')

@section('title', 'Comics')

@section('main-content')
<h1>Creating Form</h1>
    <form action="{{ route('comics.store') }}" method="post"> 
        @csrf 
        <label for="title">title</label> 
        <input type="text" name="title" id="title"><br>
        <label for="name">description</label> 
        <input type="text" name="description" id="description"><br>
        <label for="thumb">image link</label> 
        <input type="link" name="thumb" id="thumb"><br>
        <label for="price">price</label> 
        <input type="text" name="price" id="price"><br>
        <label for="series">series</label> 
        <input type="text" name="series" id="series"><br>
        <label for="sale_date">sale date</label> 
        <input type="date" name="sale_date" id="sale_date"><br>
        <label for="type">type</label> 
        <input type="text" name="type" id="type"><br>
        <input type="submit" value="Invia">
    </form>
@endsection