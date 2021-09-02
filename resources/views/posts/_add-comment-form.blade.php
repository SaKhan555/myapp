@auth
<x-panel>
    <form action="/posts/{{ $post->slug }}/comments" method="POST">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/40?u= {{ auth()->id() }}" width="40" height="40"
                 class="rounded-full">
            <h2 class="ml-2">Want to participate!</h2>
        </header>
        <x-form.textarea name="body" />
            <x-form.button>Post</x-form.button>
    </form>
</x-panel>
@else
    <p>
        <a href="/register"
           class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Register
        </a> OR
        <a href="/login"
           class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Login
        </a>
        to leave a comment
    </p>
    @endauth