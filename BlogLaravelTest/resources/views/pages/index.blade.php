
@extends('layouts.main-layout')

@section('title', 'My blog')

@section('content')

@include('includes.categories')

        @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{route('getPostByCategory', $post->category['slug'])}}">{{ $post->category['title'] }}</a>
                    <p class="time_home card-text">{{ $post['created_at'] }}</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['description'] }}</p>
                    <a href="{{route('getPost', [$post->category['slug'], $post->slug])}}" class="btn btn-primary">Read more</a>
                    <div class="float-end">Author by: {{ $post['author_id'] }}</div>
                </div>
            </div>
        @endforeach
{{--            {{$posts->links('vendor.pagination.bootstrap-4')}}--}}
    </div>
@endsection
