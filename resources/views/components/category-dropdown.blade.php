<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                <x-icon name='down-arrow' class="absolute pointer-events-none" style="right: 12px;"></x-icon>
            </button>
        </x-slot>
        <x-dropdown-item href="/?{{http_build_query(request()->except('category', 'page')) }}"
                         :active="request()->routeIs('home')">All</x-dropdown-item>
        @foreach($categories as $category)
            {{-- request()->is('/categories/' . $category->slug) --}}
            {{-- request()->is('*/' . $category->slug) --}}
            {{--isset($currentCategory) && $currentCategory->id === $category->id--}}
            {{--isset($currentCategory) && $currentCategory->is($category)--}}
            <x-dropdown-item href="/?category={{ $category->slug }}&{{http_build_query(request()->except('category', 'page')) }}"
                             :active="isset($currentCategory) && $currentCategory->is($category)">
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>