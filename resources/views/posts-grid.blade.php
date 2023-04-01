@include('post-featured-card', $post = $posts[0])

@if ($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)
            @include('post-card', $post)
        @endforeach
    </div>
@endif