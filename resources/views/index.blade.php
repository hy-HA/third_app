@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

<html>
    <body>
        <h1>Hello, {{ $tomato }}</h1>
        <h2>here is, {{ $apple }}</h2>
        <h3>welcome, {{ $name }}</h3>
    </body>
</html>