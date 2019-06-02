@extends('layouts.app')
@section('title', "Post")
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">{{ $post->title }}</h1>
            <p class="content"> {{ $post->content }}</p>
        </div>
    </section>
    @if($post->comments->count())
    <section>
        <div class="container">
                @foreach($post->comments as $comment)
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>{{ $comment->user }}</strong>
                                        <br>
                                        {{ $comment->content }}
                                    </p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <time>{{ $comment->created_at }}</time>
                                    </div>
                                </nav>
                            </div>
                        </article>
                    </div>
                @endforeach
        </div>
    </section>
    @endif
    <section class="section">
    <div class="container">
    <div class="box">
    <article class="media">
        <div class="media-content">
            <form class="form-control" method="POST" action="/posts/{{ $post->id }}/comments">
                @csrf
            <div class="field">
                <p class="control">
                    <textarea class="textarea" placeholder="Add a comment..." name="content"></textarea>
                </p>
            </div>
            <nav class="level">
                <div class="level-left">
                    <div class="level-item">
                        <input type="submit" class="button is-info" value="Submit">
                    </div>
                </div>
            </nav>
        </div>
        </form>
    </article>
    </div>
    </div>
    @include('errors')
    </section>
    <div class="footer">
        <div class="container">
            <footer>
                <time>Uploaded: {{ $post->created_at }}</time>
            </footer>
        </div>
    </div>
@endSection
