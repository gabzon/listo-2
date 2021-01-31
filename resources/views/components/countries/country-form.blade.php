<div class="mt-5 mb-10">
    <form action="{{ isset($country) ?  route($route, $country->id) : route($route) }}" method="POST">
        @csrf
        @method($method)

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:pt-5">
            <label for="name" class="lw-form-label">Name</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="name" name="name" class="lw-form-input @error('name') field-error @enderror"
                        value="{{ $country->name ?? old('name')}}" type="text">
                    @error('name')
                    <p class="italic text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="shortname" class="lw-form-label">Short Name</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="shortname" name="shortname"
                        class="lw-form-input @error('shortname') field-error @enderror"
                        value="{{ $country->shortname ?? old('shortname')}}" type="text">
                    @error('shortname')
                    <p class="italic text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="slug" class="lw-form-label">Slug</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="slug" id="text" name="slug" class="lw-form-input" disabled
                        placeholder="{{ $country->slug }}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="domain" class="lw-form-label">Domain</label>
            <div class="mt-1 sm:mt-0 sm:col-span-1">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="domain" name="domain" type="text" class="lw-form-input"
                        value="{{ $country->domain ?? old('domain')}}" placeholder="">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="alpha_2_Code" class="lw-form-label">Alpha 2 Code</label>
            <div class="mt-1 sm:mt-0 sm:col-span-1">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="alpha_2_Code" name="alpha_2_Code" type="text" class="lw-form-input"
                        value="{{ $country->alpha_2_Code ?? old('alpha_2_Code')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="alpha_3_Code" class="lw-form-label">Alpha 3 Code</label>
            <div class="mt-1 sm:mt-0 sm:col-span-1">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="alpha_3_Code" type="text" name="alpha_3_Code" class="lw-form-input"
                        value="{{ $country->alpha_2_Code ?? old('alpha_2_Code')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="phone_code" class="lw-form-label">Phone Code</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="phone_code" type="text" name="phone_code" class="lw-form-input"
                        value="{{ $country->phone_code ?? old('phone_code')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="capital" class="lw-form-label">Capital</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="capital" type="text" name="capital" class="lw-form-input"
                        value="{{ $country->capital ?? old('capital')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="region" class="lw-form-label">Region</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="region" type="text" name="region" class="lw-form-input"
                        value="{{ $country->region ?? old('region')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="subregion" class="lw-form-label">Subregion</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="subregion" type="text" name="subregion" class="lw-form-input"
                        value="{{ $country->subregion ?? old('subregion')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="currency_code" class="lw-form-label">Currency Code</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="currency_code" type="text" name="currency_code" class="lw-form-input"
                        value="{{ $country->currency_code ?? old('currency_code')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="currency_name" class="lw-form-label">Currency Name</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="currency_name" type="text" name="currency_name" class="lw-form-input"
                        value="{{ $country->currency_name ?? old('currency_name')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="currency_symbol" class="lw-form-label">Currency Symbol</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm sm:max-w-xs">
                    <input id="currency_symbol" type="text" name="currency_symbol" class="lw-form-input"
                        value="{{ $country->currency_symbol ?? old('currency_symbol')}}">
                </div>
            </div>
        </div>

        <div
            class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="flag" class="lw-form-label">Flag</label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg rounded-md shadow-sm">
                    <input id="flag" type="text" name="flag" class="lw-form-input"
                        value="{{ $country->flag ?? old('flag') }}">
                </div>
            </div>
        </div>

        <div class="flex justify-start my-5">
            <button type="submit" class="lw-form-btn-save">
                @include($icon)
                <span class="ml-2">{{ $button }}</span>
            </button>
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center ml-3 py-2 px-3 bg-gray-300 rounded-md hover:bg-gray-400">
                @include('icons.x')
                <span class="ml-2">Cancel</span>
            </a>
        </div>
    </form>
</div>