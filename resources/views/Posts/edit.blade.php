@extends('layouts.app')
@section('title', 'Edit Post')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Edit Post</h1>

            <form method="POST" action="/posts/{{ $post->id }}">
                @method('PATCH')
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title"
                               placeholder="Title" value="{{ $post->title }}" required>
                    </div>
                </div>

                <div class="field">
                    <label for="content" class="label">Content</label>

                    <textarea class="textarea {{ $errors->has('content') ? 'is-danger' : '' }}" name="content" rows="7"
                              required>{{ $post->content }}</textarea>
                </div>

                <div class="field">
                    <label for="blurb" class="label">Blurb</label>

                    <textarea class="textarea {{ $errors->has('blurb') ? 'is-danger' : '' }}" name="blurb" rows="3"
                              required>{{ $post->blurb }}</textarea>
                </div>

                <div class="field">
                    <input type="submit" class="button" value="Submit changes">
                </div>
            </form>
            <br>
            <form method="POST" action="/posts/{{ $post->id }}" id="deleteForm">
                @method('DELETE')
                @csrf
                <input type="submit" class="button is-danger" value="Delete Post">
            </form>
            @include('errors')
        </div>
    </section>
@endSection