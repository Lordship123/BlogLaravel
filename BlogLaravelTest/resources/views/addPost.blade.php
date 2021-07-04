@extends('layouts.main-layout')

@section('admin_navbar')
    @parent
@stop

@section('href', '')

@section('second-nav-item', 'Admin Panel')

@section('title', 'Add New Post')

@section('title', 'Admin Page')

@section('content')

    <link rel="stylesheet" href="/css/admin.css">
            <form class="" method="POST" action="{{route('addPost')}}">
                @csrf
                <div>
                    <label for="">Name Post</label>
                    <input class="w-100" name="post_title" id="post_title" type="text" value="" placeholder="Name Post">
                </div>

                <br>

                <div>
                    <label for="">Description</label>
                    <input class="w-100" name="post_desc" id="post_desc" value="" placeholder="Description...">
                </div>

                <br>

                <div>
                    <label for="">Category</label>
                    <select class="w-100" name="category" id="">
                        @foreach($categories as $category)
                                <option value="{{ $category['id'] }}" >{{ $category['title'] }}</option>
                        @endforeach
                    </select>
                </div>

                <br>

                <div>
                    <label for="">Text Post</label>
                    <textarea class="w-100 admin_input_text_post" name="post_text" id="post_text" placeholder="Text post..."></textarea>
                </div>

                <button class="btn btn-primary"> Update </button>
            </form>
        </div>
@endsection
<script src="/js/admin.js"></script>
