@extends ('layout')
@include('posts-header')

@section('content')
        @yield('posts-h')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                @include('posts-grid', $posts)

                {{ $posts->links() }}
            @else 
                <p class="text-center"> No hay Post todavía, vuelve luego  </p>
            @endif
        </main>
@endsection