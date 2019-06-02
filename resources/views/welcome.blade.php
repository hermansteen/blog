@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <section class="hero is-medium is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    This is my blog
                </h1>
                <h2 class="subtitle">
                    I have made it for my own sake and to learn Object Oriented Programming in conjunction with Laravel.
                </h2>
            </div>
        </div>
    </section>
    <br>
    <div class="container">
        @foreach($posts as $post)
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        {{ $post->blurb }}
                        <br>
                        <time class="has-text-grey">{{ $post->created_at }}</time>
                    </div>
                </div>
{{--                @if(auth()->user()->hasRole('admin'))--}}
                    <footer class="card-footer">
                        <a href="/posts/{{ $post->id }}/edit" class="card-footer-item">Edit</a>
                    </footer>
{{--                @endif--}}
            </div>
        @endforeach
    </div>
    <br>
@endSection