@extends('layouts.app')
@section('title', "{{ $posts->title }}")
@section('content')
    <h1>{{$posts->title}}</h1>
@endsection