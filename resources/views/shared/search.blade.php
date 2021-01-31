<form action="{{ route($action) }}" method="get">
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            @include('icons.search', ['style'=> 'mr-3 h-4 w-4 text-gray-400'])
        </div>
        <input id="search" name="search" type="search" class="form-input block w-full pl-9 sm:text-sm sm:leading-5"
            placeholder="Search..." value="{{ request()->query('search') }}">
    </div>
</form>