@if(session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bottom-3 right-3 py-2 px-4 bg-blue-500 text-white rounded-xl text-sm">
        {{--{{ session()->get('success') }}--}}
        {{ session('success') }}
    </div>
@endif