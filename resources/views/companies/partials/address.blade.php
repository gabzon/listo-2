<div class="flex flex-wrap">
    <div class="w-full md:w-4/5 pr-3 mb-6">
        <label for="street">{{ __('Street / Address') }}</label>
        <input id="street" name="street" type="text" class="form-control @error('address') field-error @enderror"
            value="{{ $agency->street ?? old('street')}}">

        @error('address')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="w-full md:w-1/5 pl-3 mb-6">
        <label for="street_number">{{ __('Number') }}</label>
        <input id="street_number" name="street_number" type="text" class="form-control"
            value="{{ $agency->street_number ?? old('street_number')}}">
    </div>
</div>

<div class="mb-6">
    <label for="address_info">{{ __('Address Supplementary') }}</label>
    <input id="address_info" name="address_info" type="text" class="form-control"
        value="{{ $agency->address_info ?? old('address_info')}}">
</div>

<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3">
        <div class="mb-6">
            <label for="postal_code">{{ __('Postal Code') }}</label>
            <input id="postal_code" type="text" class="form-control" name="postal_code"
                value="{{ $agency->postal_code ?? old('postal_code') }}">
        </div>
    </div>
    <div class="w-full md:w-1/2 px-3">
        <div class="mb-6">
            <label for="location">{{ __('City') }}</label>
            <input id="location" name="location" type="text" class="form-control"
                value="{{ $agency->location ?? old('location')}}">
        </div>
    </div>
</div>

<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3">
        <div class="mb-6">
            <label for="state">{{ __('State') }}</label>
            <input id="state" name="state" type="text" class="form-control" value="{{ $agency->state ?? old('state')}}">
        </div>
    </div>
    <div class="w-full md:w-1/2 px-3">
        <div class="mb-6">
            <label for="country">{{ __('Country') }}</label>
            <input id="country" type="text" class="form-control" name="country"
                value="{{ $agency->country ?? old('country')}}">
        </div>
    </div>
</div>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3">
        <input id="lat" name="lat" type="text" value="{{ $agency->lat ?? old('lat')}}">
    </div>
    <div class="w-full md:w-1/2 px-3">
        <input id="lng" name="lng" type="text" value="{{ $agency->lng ?? old('lng')}}">
    </div>
</div>