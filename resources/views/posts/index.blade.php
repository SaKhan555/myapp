<x-layout>
    @include('posts._header')
    @if($posts->count())
        <x-posts-grid :posts="$posts" />
    @else
        <p class="text-center">No post yet. please check back later.</p>
    @endif
</x-layout>