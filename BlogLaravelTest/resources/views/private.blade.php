@extends('layouts.main-layout')

@section('admin_navbar')
    @parent
@stop

@section('href', 'add')

@section('second-nav-item', 'Add New Post')

@section('title', 'Admin Page')

@section('content')

@foreach($posts as $post)

<link rel="stylesheet" href="/css/admin.css">
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('getPostByCategory', $post->category['slug'])}}">{{ $post->category['title'] }}</a>
        </div>
        <div class="card-body d-flex justify-content-between">
            <div class="">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['description'] }}</p>
            </div>
            <div class="float-right">
                <a href="{{route('deletePost', [$post->slug])}}" class="btn btn-danger">X</a>
                <input type="button" class="btn btn-primary" onclick="showModalWin('{{$post->slug}}')" value="✏️">
            </div>
        </div>
    </div>

    <div style="text-align: left" id="popupWin{{$post->slug}}" class="modalwin">
        <form class="" method="POST" action="{{route('editPost', [$post->slug])}}">
            @csrf
                <div class="card-body justify-content-between">
                    <label for="">Name Post</label>
                    <br>
                    <input class="w-100" name="post_title" id="post_title" type="text" value="{{ $post['title'] }}">
                </div>
                <div class="card-body justify-content-between">
                    <label for="">Description</label>
                    <br>
                    <textarea class="w-100 admin_input_description" name="post_text" id="post_text">{{ $post['description'] }}</textarea>
{{--                    <input  name="post_text" id="post_text" type="textar" value="{{ $post['description'] }}">--}}
                </div>

                <button class="btn btn-primary"> Update </button>
        </form>
    </div>

    @endforeach
</div>
@endsection
{{--<script src="/js/admin.js"></script>--}}
