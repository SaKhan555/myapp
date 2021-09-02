@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-red-500 text-xs">{{ $error }}</li>
        @endforeach
    </ul>
@endif