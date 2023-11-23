@extends('layouts/main')

@section('title', "Choquei News - $notice->title")

@section('content')
    
    <h2>{{ $notice->title }}</h2>
    <hr>
    <p>{{ $notice->description }}</p>

@endsection