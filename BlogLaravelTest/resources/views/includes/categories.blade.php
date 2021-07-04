<div class="mb-4 text-center" role="group" aria-label="Basic outlined example">
    @foreach($categories as $category)
        <a href="{{route('getPostByCategory', $category['slug'])}}" class="link_home_href btn btn-outline-primary">{{ $category['title'] }}</a>
    @endforeach
</div>
