<form action="{{ route('destinations.store') }}" method="post">
  @csrf
  {{-- <input class="country-input w-full border bg-white border-gray-400 py-3 px-4 leading-tight appearance-none block focus:outline-none
focus:border-gray-600 rounded" type="search" name="country" type="text" id=""> --}}

  <input id="{{ $status }}" name="country" type="text" class="country-input w-full border bg-white border-gray-400
  py-3 px-4 leading-tight appearance-none block focus:outline-none
  focus:border-gray-600 rounded" list="countries" placeholder="{{ $label }}">
  <datalist id="countries">
    @foreach ($countryList as $c)
    <option value="{{ $c->name }}">
      @endforeach
  </datalist>
  <input type="hidden" name="status" value="{{ $status }}">
</form>