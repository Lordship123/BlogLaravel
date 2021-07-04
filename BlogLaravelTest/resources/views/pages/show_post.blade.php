@extends('layouts.main-layout')

@section('title', $post['title']);

@section('content')

@include('includes.categories');
        <article>
            {!! $post->text !!} {{-- [!! - it's html encoded text] --}}
        </article>

        <a href="{{route('getPostByCategory', $slug_category)}}" class="btn btn-outline-primary mb-4">Back</a>

@endsection



