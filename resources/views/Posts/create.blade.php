@extends('layouts.app')
@section('title', 'New Post')
@section('content')
    <section class="section">
        <div class="container">
            <form method="POST" action="/posts">
                {{ csrf_field() }}
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title"
                               placeholder="Title" value="{{ old('title') }}" required></div>
                </div>
                <div class="field">
                    <label for="content" class="label">Content</label>
                    <div class="control">
                <textarea name="content" placeholder="Write your blog post here"
                          class="textarea {{ $errors->has('content') ? 'is-danger' : '' }}"
                          required>{{ old('content') }}</textarea></div>
                </div>
                <div class="field">
                    <label for="Blurb" class="label">Blurb</label>
                    <div class="control">
                <textarea name="blurb" placeholder="Write a few sentences that summarize your post"
                          class="textarea {{ $errors->has('blurb') ? 'is-danger' : '' }}"
                          required> {{ old('blurb') }}</textarea></div>
                </div>
                <div>
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </form>
            @include('errors')
        </div>
    </section>
@endSection