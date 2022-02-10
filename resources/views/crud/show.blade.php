@extends('crud.main.layout')
@section('title','Show Student')

@section('body')
<div class="container">
    <div class="jumbotron bg-info text-center">
        <h3 class="bg-warning p-3">Welcome to Student detail</h3>

        <h2>ID: {{ $student->id }}</h2>
        <h2>Name: {{ $student->name }}</h2>
        <h2>Email : {{ $student->email  }}</h2>
        <h2>Address: {{ $student->address }}</h2>
    </div>
</div>
@endsection
